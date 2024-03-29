<!doctype html>
<html lang="en">

<head>
    <title>Nirmaan</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
    <link rel="stylesheet" href="{{ asset('css/style.css') }}">
    <link rel="stylesheet" href="{{ asset('css/colors/green.css') }}">
</head>

<body class="gray">
    <div id="wrapper">
        @include('cms.common.navigation')
        <div class="dashboard-container">
            @include('cms.common.sidebar')
            <div class="dashboard-content-container" data-simplebar>
                <div class="dashboard-content-inner">
                    <div class="dashboard-headline">
                        <nav id="breadcrumbs" class="dark">
                            <ul>
                                <li><a href="{{ route('dashboard') }}">Home</a></li>
                                <li>Start Ups Main</li>
                            </ul>
                        </nav>
                    </div>
                    <form action="{{route('add.images')}}" method="post" enctype='multipart/form-data'>
                        <input type="hidden" value="gallery" name='type'>
                        @csrf
                        <div class="row">
                            <div class="col-xl-12">
                                <div class="dashboard-box margin-top-0">
                                    <div class="headline">
                                        <h3><i class="icon-feather-user-plus"></i> Gallery</h3>
                                    </div>
                                    <div class="content with-padding padding-bottom-10">
                                        <div class="row">
                                            <div class="col-xl-6">
                                                <div class="submit-field">
                                                    <h5>Image</h5>
                                                    {{-- <input name='image_1' type="text"  class="client-name with-border" @if (count($gallery)>0) value="{{$gallery->image_1}}" @endif   required> --}}
                                                    <div class="uploadButton ">
                                                        <input name="image" class="uploadButton-input" type="file" accept="image/*" id="image_gallery" required/>
                                                        <label class="uploadButton-button ripple-effect" for="image_gallery">Upload Image</label>
                                                        <span class="uploadButton-file-name image_1">Please upload Image of the Team Mate 560 x 340 dimensions</span>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col-xl-6">
                                                <div class="submit-field">
                                                    <h5>Image No.</h5>
                                                    <select name="image_no" class="selectpicker">
                                                        <option value="1">1</option>
                                                        <option value="2">2</option>
                                                        <option value="3">3</option>
                                                        <option value="4">4</option>
                                                        <option value="5">5</option>
                                                        <option value="6">6</option>
                                                    </select>
                                                    </div>
                                                    
                                                </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-xl-12">
                            <button type='submit' id="addNewClient" class="button ripple-effect big margin-top-30"><i
                                    class="icon-feather-plus"></i> Add</button>
                        </div>
                        </form>
                        <form action="{{route('add.images')}}" method="post" enctype='multipart/form-data'>
                            <input type="hidden" value="events" name='type'>
                            @csrf
                            <div class="row margin-top-20">
                                <div class="col-xl-12">
                                    <div class="dashboard-box margin-top-0">
                                        <div class="headline">
                                            <h3><i class="icon-feather-user-plus"></i> Events</h3>
                                        </div>
                                        <div class="content with-padding padding-bottom-10">
                                            <div class="row">
                                                <div class="col-xl-6">
                                                    <div class="submit-field">
                                                        <h5>Image</h5>
                                                        {{-- <input name='image_1' type="text"  class="client-name with-border" @if (count($gallery)>0) value="{{$gallery->image_1}}" @endif   required> --}}
                                                        <div class="uploadButton ">
                                                            <input name="image" class="uploadButton-input " type="file" accept="image/*" id="image_event" required/>
                                                            <label class="uploadButton-button ripple-effect" for="image_event">Upload Image</label>
                                                            <span class="uploadButton-file-name ">Please upload Image of the Team Mate 560 x 340 dimensions</span>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="col-xl-6">
                                                    <div class="submit-field">
                                                        <h5>Image No.</h5>
                                                        <select name="image_no" class="selectpicker">
                                                            <option value="1">1</option>
                                                            <option value="2">2</option>
                                                            <option value="3">3</option>
                                                            <option value="4">4</option>
                                                            <option value="5">5</option>
                                                            <option value="6">6</option>
                                                        </select>
                                                        </div>
                                                        
                                                    </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-xl-12">
                                <button type='submit' id="addNewClient" class="button ripple-effect big margin-top-30"><i
                                        class="icon-feather-plus"></i> Add</button>
                            </div>
                            </form>
                            <form action="{{route('add.images')}}" method="post" enctype='multipart/form-data'>
                                <input type="hidden" value="team" name='type'>
                                @csrf
                                <div class="row margin-top-20">
                                    <div class="col-xl-12">
                                        <div class="dashboard-box margin-top-0">
                                            <div class="headline">
                                                <h3><i class="icon-feather-user-plus"></i>Team</h3>
                                            </div>
                                            <div class="content with-padding padding-bottom-10">
                                                <div class="row">
                                                    <div class="col-xl-6">
                                                        <div class="submit-field">
                                                            <h5>Image</h5>
                                                            {{-- <input name='image_1' type="text"  class="client-name with-border" @if (count($gallery)>0) value="{{$gallery->image_1}}" @endif   required> --}}
                                                            <div class="uploadButton ">
                                                                <input name="image" class="uploadButton-input " type="file" accept="image/*" id="image_team" required/>
                                                                <label class="uploadButton-button ripple-effect" for="image_team">Upload Image</label>
                                                                <span class="uploadButton-file-name">Please upload Image of the Team Mate 560 x 340 dimensions</span>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="col-xl-6">
                                                        <div class="submit-field">
                                                            <h5>Image No.</h5>
                                                            <select name="image_no" class="selectpicker">
                                                                <option value="1">1</option>
                                                                <option value="2">2</option>
                                                                <option value="3">3</option>
                                                                <option value="4">4</option>
                                                                <option value="5">5</option>
                                                                <option value="6">6</option>
                                                            </select>
                                                            </div>
                                                            
                                                        </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-xl-12">
                                    <button type='submit' id="addNewClient" class="button ripple-effect big margin-top-30"><i
                                            class="icon-feather-plus"></i> Add</button>
                                </div>
                                </form>
                    </div>
                    @include('cms.common.footer')
                </div>
            </div>
        </div>
    </div>

    <!-- Scripts
================================================== -->
    <script src={{ asset('js/jquery-3.6.0.min.js') }}></script>
    <script src={{ asset('js/jquery-migrate-3.3.2.min.js') }}></script>
    <script src={{ asset('js/mmenu.min.js') }}></script>
    <script src={{ asset('js/tippy.all.min.js') }}></script>
    <script src={{ asset('js/simplebar.min.js') }}></script>
    <script src={{ asset('js/bootstrap-slider.min.js') }}></script>
    <script src={{ asset('js/bootstrap-select.min.js') }}></script>
    <script src={{ asset('js/snackbar.js') }}></script>
    <script src={{ asset('js/clipboard.min.js') }}></script>
    <script src={{ asset('js/counterup.min.js') }}></script>
    <script src={{ asset('js/magnific-popup.min.js') }}></script>
    <script src={{ asset('js/slick.min.js') }}></script>
    <script src={{ asset('js/custom.js') }}></script>

    <!-- Snackbar // documentation: https://www.polonel.com/snackbar/ -->
    <script>
        // Snackbar for user status switcher
        $('#snackbar-user-status label').click(function() {
            Snackbar.show({
                text: 'Your status has been changed!',
                pos: 'bottom-center',
                showAction: false,
                actionText: "Dismiss",
                duration: 3000,
                textColor: '#fff',
                backgroundColor: '#383838'
            });
        });
    </script>

</body>

</html>
