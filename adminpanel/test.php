<h3>A Simple Paginator</h3>

<div></div>
<button id="prev">prev 5</button>
<button id="next">next 5</button>
<style>
	div {
    padding: 20px;
    font-size: 20px;
    border-radius: 15px;
    background-color: #fafafa;
    border: 1px solid #999;
    font-family:'Courier New', 'Courier', monospaced;
    margin-bottom: 10px;
}
h3 {
    clear: both;
    padding-top: 20px;
}
button {
    font-size: 36px;
}
}
</style>
<script src="https://www.gstatic.com/firebasejs/4.5.0/firebase.js"></script>
<script type="text/javascript" src="js/jquery.min.js"></script>
    <script type="text/javascript" src="js/jquery-ui-1.10.3.custom.js"></script>
    <script type="text/javascript" src="js/bootstrap.min.js"></script>
    <script type="text/javascript" src="js/jquery.slimscroll.min.js"></script>
    <script type="text/javascript" src="js/jquery.blockUI.js"></script>
    <script type="text/javascript" src="js/jquery.event.move.js"></script>
    <script type="text/javascript" src="js/lodash.compat.js"></script>
    <script type="text/javascript" src="js/respond.min.js"></script>
    <script type="text/javascript" src="js/excanvas.js"></script>
    <script type="text/javascript" src="js/breakpoints.js"></script>
    <script type="text/javascript" src="js/touch-punch.min.js"></script>
    
    <script type="text/javascript" src="js/select2.min.js"></script>
<script>
/***************************
  A SIMPLE PAGINATOR
  *************************/
function Paginator(ref, limit) {
    this.ref = ref;
    this.pageNumber = 0;
    this.limit = limit;
    this.lastPageNumber = null;
    this.currentSet = {};
}

Paginator.prototype = {
    nextPage: function (callback) {
        if( this.isLastPage() ) {
            callback(this.currentSet);    
        }
        else {
            var lastKey = getLastKey(this.currentSet);
            // if there is no last key, we need to use undefined as priority
            var pri = lastKey ? null : undefined;
            this.ref.startAt(pri, lastKey)
                .limit(this.limit + (lastKey? 1 : 0))
                .once('value', this._process.bind(this, {
                    cb: callback,
                    dir: 'next',
                    key: lastKey
                }));
        }
    },

    prevPage: function (callback) {
        console.log('prevPage', this.isFirstPage(), this.pageNumber);
        if( this.isFirstPage() ) {
            callback(this.currentSet);    
        }
        else {
            var firstKey = getFirstKey(this.currentSet);
            // if there is no last key, we need to use undefined as priority
            this.ref.endAt(null, firstKey)
                .limit(this.limit+1)
                .once('value', this._process.bind(this, {
                    cb: callback,
                    dir: 'prev',
                    key: firstKey
                }));
        }
    },

    isFirstPage: function () {
        return this.pageNumber === 1;
    },

    isLastPage: function () {
        return this.pageNumber === this.lastPageNumber;
    },

    _process: function (opts, snap) {
        var vals = snap.val(), len = size(vals);
        console.log('_process', opts, len, this.pageNumber, vals);
        if( len < this.limit ) {
            // if the next page returned some results, it becomes the last page
            // otherwise this one is
            this.lastPageNumber = this.pageNumber + (len > 0? 1 : 0);   
        }
        if (len === 0) {
            // we don't know if this is the last page until
            // we try to fetch the next, so if the next is empty
            // then do not advance
            opts.cb(this.currentSet);
        }
        else {
            if (opts.dir === 'next') {
                this.pageNumber++;
                if (opts.key) {
                    dropFirst(vals);
                }
            } else {
                this.pageNumber--;
                if (opts.key) {
                    dropLast(vals);
                }
            }
            this.currentSet = vals;
            opts.cb(vals);
        }

    }
};

/***************************
  APPLICATION LOGIC
  *************************/
var fb = new Firebase('https://examples-sql-queries.firebaseio.com/widget');
var paginator = new Paginator(fb, 5);
moveForward();

$('#prev').click(moveBackward);
$('#next').click(moveForward);


/***************************
  DEMO UTILS (fluff)
  *************************/

function moveForward() {
    loading();
    paginator.nextPage(loaded);
}

function moveBackward() {
    loading();
    paginator.prevPage(loaded);
}

function loading() {
    $('button').prop('disabled', true);
}

function loaded(vals) {
    console.log('loaded', vals);
    var messages = map(vals, function (v, k) {
        return v.color + ' ' + v.shape + '<br />';
    });
    $('#prev').prop('disabled', paginator.isFirstPage());
    $('#next').prop('disabled', paginator.isLastPage());
    $('div').html(messages.length ? messages.join("\n") : '-no records-');
}

function getLastKey(obj) {
    var key;
    if (obj) {
        each(obj, function (v, k) {
            key = k;
        });
    }
    return key;
}

function getFirstKey(obj) {
    var key;
    if (obj) {
        each(obj, function (v, k) {
            key = k;
            return true;
        });
    }
    return key;
}

function dropFirst(obj) {
    if (obj) {
        delete obj[getFirstKey(obj)];
    }
    return obj;
}

function dropLast(obj) {
    if (obj) {
        delete obj[getLastKey(obj)];
    }
    return obj;
}

function map(obj, cb) {
    var out = [];
    each(obj, function (v, k) {
        out.push(cb(v, k));
    });
    return out;
}

function each(obj, cb) {
    if (obj) {
        for (k in obj) {
            if (obj.hasOwnProperty(k)) {
                var res = cb(obj[k], k);
                if (res === true) {
                    break;
                }
            }
        }
    }
}

function size(obj) {
    var i = 0;
    each(obj, function () {
        i++;
    });
    return i;
}
</script>