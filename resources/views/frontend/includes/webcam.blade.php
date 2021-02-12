
<!-- Modal Content Code -->
<div class="modal fade" tabindex="-1" id="camera-modal">
    <div class="modal-dialog modal-sm" role="document">
        <div class="modal-content">
            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                <em class="icon ni ni-cross"></em>
            </button>
            <div class="modal-header">
                <h5 class="modal-title">Capture <span class="entity-name"></span>'s Photograph</h5>
            </div>
            <div class="modal-body">
                <div class="row gy-3 justify-content-center">
                    <div class="col">
                        <div class="border-lighter rounded" id="my_camera"></div>
                        <div class="my-3"></div>
                        <button class="btn btn-primary" onClick="take_snapshot()"><em class="icon ni ni-camera"></em><span>Take Snapshot</span> </button>
                        <div class="my-3"></div>
                    </div>
                </div>

                <div class="row gy-3 justify-content-center">
                    <div class="col-12" id="results">
                    </div>
                </div>
            </div>
            <div class="modal-footer bg-lighter">
                <div class="text-center w-100">
                    <p>Close this modal once you're ok with the captured image</p> <button class="btn btn-sm btn-warning" data-dismiss="modal" aria-label="Close">Close Capture Modal</button>
                </div>
            </div>
        </div>
    </div>
</div>

<!-- Webcam.min.js -->
<script type="text/javascript" src="{{ asset('js/webcamjs/webcam.min.js') }}"></script>

<script>
    var owner = ['Owner', '#owner_photo_modal_button', 'passport'];
    var driver = ['Driver', '#driver_photo_modal_button', 'driver_photograph'];
    var entity = owner;

    function setEntity($data){
        if($data === 'owner'){
            entity = owner;
        }else{
            entity = driver;
        }

        $('.entity-name').html(entity[0]);
        return console.log(entity);
    }

    // Configure a few settings and attach camera
    Webcam.set({
        width: 320,
        height: 240,
        image_format: 'jpeg',
        jpeg_quality: 100
    });
    Webcam.attach( '#my_camera' );

    // preload shutter audio clip
    var shutter = new Audio();
    shutter.autoplay = false;
    shutter.src = navigator.userAgent.match(/Firefox/) ? '{{ asset("audio/shutter.ogg") }}' : '{{ asset("audio/shutter.mp3") }}';

    function take_snapshot() {
        // play sound effect
        shutter.play();

        // take snapshot and get image data
        Webcam.snap( function(data_uri) {
            // console.log(data_uri);
            var storer = document.getElementById(entity[2]);
            storer.innerText = data_uri;
            $(entity[1]).html(entity[0] + '\'s Photo captured');
            // display results in page
            document.getElementById('results').innerHTML =
                '<img src="'+data_uri+'" class="img-fluid"/>';
            $('#photo-capture-notice').show();
        } );
    }
</script>
