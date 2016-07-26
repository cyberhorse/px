$(document).ready(function() {
    $('body').on('click', 'a.ajax', function(e) {
        e.preventDefault();

        var target = getTarget($(this));
        $(target).load($(this).attr('href'));
    });

    $('body').on('submit', 'form', function(e) {
        e.preventDefault();

        var target = getTarget($(this));
        $.post($(this).attr('action'), $(this).serialize(), function(html) {
            $(target).html(html)
        })
    });
});

function getTarget(el) {
    var target = '#container';
    if ($(el).data('target')) {
        target = $(el).data('target');
    }

    return target;
}

function share_fb(url) {
    window.open('https://www.facebook.com/sharer/sharer.php?u='+url,'facebook-share-dialog',"width=626,height=436")
}


var onFail = function(e) {
    console.log('Rejected!', e);
};

var onSuccess = function(s) {
    var context = new webkitAudioContext();
    var mediaStreamSource = context.createMediaStreamSource(s);
    recorder = new Recorder(mediaStreamSource);
    recorder.record();

    // audio loopback
    // mediaStreamSource.connect(context.destination);
}

window.URL = window.URL || window.webkitURL;
navigator.getUserMedia  = navigator.getUserMedia || navigator.webkitGetUserMedia || navigator.mozGetUserMedia || navigator.msGetUserMedia;

var recorder;
var audio = document.querySelector('audio');

function recordAudio() {
    if (navigator.getUserMedia) {
        navigator.getUserMedia({audio: true}, onSuccess, onFail);
    } else {
        console.log('navigator.getUserMedia not present');
    }
}

function stopRecording() {
    recorder.stop();
    recorder.exportWAV(function(s) {
        audio.src = window.URL.createObjectURL(s);
    });
}