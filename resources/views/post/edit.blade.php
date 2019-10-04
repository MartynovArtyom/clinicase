@extends('social.index')

@push('style')
<link type="text/css" href="https://cdn.rawgit.com/nhnent/tui.color-picker/v2.0.0/dist/tui-color-picker.css" rel="stylesheet">
<link rel="stylesheet" type="text/css" href="{{ asset('css/service-basic.css') }}"/>
@endpush

@section('content')
	<div class="container content mt-3 mb-5">
	    <div class="row">
	        <div class="col-lg-12">
	            <div class="social-content-background post-wrap b-r-5">

	                <div class="card">
	                  <div class="card-header">
	                    Edit post
	                </div>
	                <div class="card-body">
	                	<form action="{{route('post-update', $post[0]->id)}}" method="POST" enctype="multipart/form-data">
                            @csrf
	                		{{method_field('PUT')}}

							<p class="field-title">Nom du poste</p>
	                        <input class="mb-4 w-100 field-description-mod" type="text"
	                        name="title"
	                        id="title"
	                        value="{{$post[0]->title}}"
	                        required
	                        >
	                        <p class="field-title">Description</p>
	                        <textarea class="mb-4 w-100 description-post field-description-mod" name="description" id="description" required>{{$post[0]->description}}</textarea>

	                        <p class="field-title">Spécialité médicale</p>
	                        <select class="custom-select text-secondary mb-4" name="specialty_id" required>
	                            @forelse ($specialty as $data)
	                            <option value="{{ $data->id }}" {{ $post[0]->specialty_id == $data->id ? 'selected' : '' }}>
	                                {{ $data->name }}
	                            </option>
	                            @empty
	                            <option selected>Not specialty</option>
	                            @endforelse
	                        </select>
	                        <p class="field-title">Région anatomique</p>
	                        <select class="custom-select text-secondary mb-4" name="anatomy_id" required>
	                            @forelse ($anatomy as $data)
	                            <option value="{{ $data->id }}" {{ $post[0]->anatomy_id == $data->id ? 'selected' : '' }}>
	                                {{ $data->name }}
	                            </option>
	                            @empty
	                            <option selected>Not anatomy</option>
	                            @endforelse
	                        </select>

                            <p class="field-title">Modification d'images</p>

                            <input type="file"
                                   class="loading-file"
                                   name="images[]"
                                   accept="image/*"
                                   multiple
                                    {{ empty($post[0]->image) ? 'required' : '' }}
                            >
                            <div class="content-image-edit wrap-img">
                                @if (!empty($post[0]->image))
                                    @foreach (explode(',', $post[0]->image) as $k => $url)
                                        <div class="edit_image item-img item-img-mod btn btn-secondary" data-toggle="tooltip" data-placement="top" title="Modifier les images" data-idImage="{{$k}}">
                                            <img class="img-fluid" src="{{ asset('uploads1/'.$url) }}"/>
                                            <input id="image-del-{{$k}}" type="checkbox" name="image_delete[{{$k}}]"
                                                   class="d-none">
                                            <input type="hidden" name="edit_image[{{$k}}]">
                                        </div>
                                    @endforeach
                                @endif
                            </div>

                            <div class="body-container image-editor" style="display: none">
                                <div class="tui-image-editor-controls">
                                    <ul class="menu">
                                        <li class="menu-item" id="btn-save" data-idImage="">Save</li>
                                        <li class="menu-item disabled" id="btn-undo">Undo</li>
                                        <li class="menu-item disabled" id="btn-redo">Redo</li>
                                        <li class="menu-item" id="btn-clear-objects">ClearObjects</li>
                                        <li class="menu-item" id="btn-crop">Crop</li>
                                        <li class="menu-item d-none d-lg-inline-block" id="btn-draw-line">DrawLine</li>
                                        <li class="menu-item" id="btn-draw-shape">Shape</li>
                                    </ul>
                                    <div class="sub-menu-container" id="crop-sub-menu">
                                        <ul class="menu">
                                            <li class="menu-item" id="btn-apply-crop">Apply</li>
                                            <li class="menu-item" id="btn-cancel-crop">Cancel</li>
                                        </ul>
                                    </div>
                                    <div class="sub-menu-container menu" id="draw-line-sub-menu">
                                        <ul class="menu">
                                            <li class="menu-item">
                                                <label class="element-menu-item" ><input type="radio" name="select-line-type" value="freeDrawing" checked="checked"> Free drawing</label>
                                                <label><input type="radio" name="select-line-type" value="lineDrawing"> Straight line</label>
                                            </li>
                                            <li class="menu-item">
                                                <div id="tui-brush-color-picker">Brush color</div>
                                            </li>
                                            <li class="menu-item"><label class="menu-item no-pointer"><span class="mr-3">Brush width</span><input id="input-brush-width-range" type="range" min="5" max="30" value="12"></label></li>
                                            <li class="menu-item close">Close</li>
                                        </ul>
                                    </div>
                                    <div class="sub-menu-container" id="draw-shape-sub-menu">
                                        <ul class="menu">
                                            <li class="menu-item">
                                                <label class="element-menu-item"><input type="radio" name="select-shape-type" value="rect" checked="checked"> Rect</label>
                                                <label class="element-menu-item"><input type="radio" name="select-shape-type" value="circle"> Circle</label>
                                                <label class="element-menu-item"><input type="radio" name="select-shape-type" value="triangle"> Triangle</label>
                                            </li>
                                            <li class="menu-item">
                                                <select name="select-color-type">
                                                    <option value="fill">Fill</option>
                                                    <option value="stroke">Stroke</option>
                                                </select>
                                                <label><input class="m-1" type="checkbox" id="input-check-transparent"><span>Transparent</span></label>
                                                <div id="tui-shape-color-picker"></div>
                                            </li>
                                            <li class="menu-item">
                                                <label class="menu-item no-pointer">
                                                    <span class="element-menu-item">Stroke width</span><input id="input-stroke-width-range" type="range" min="0" max="300" value="5">
                                                </label>
                                            </li>
                                            <li class="menu-item close">Close</li>
                                        </ul>
                                    </div>
                                </div>
                                <div class="tui-image-editor"></div>
                            </div>


                            <input class="btn btn-primary" type="submit" value="Update">
                        </form>
	                </div>
	            </div>
	        </div>
	    </div>
	</div>
</div>
@endsection
@push('scripts')
    <script type="text/javascript">
        $(document).ready(function(){
            $(document).on('click', '#btn-save', function(){
                var $this = $(this),
                    id_image = $($this).data('idimage'),
                    dataURL = imageEditor.toDataURL();

                $('input[name="edit_image['+ id_image +']"]').val(dataURL);
            });

            $(document).on('click', '.edit_image', function(){
                var $this = $(this),
                    url_img = $this.find('img').attr('src'),
                    id_image = $this.data('idimage');

                $('#btn-save').data('idimage', id_image);

                imageEditor.loadImageFromURL(url_img, 'SampleImage').then(() => {
                    imageEditor.clearUndoStack();

                    $('.body-container').show();
                });
            });

        });
    </script>
    <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/fabric.js/1.6.7/fabric.js"></script>
    <script type="text/javascript" src="https://uicdn.toast.com/tui.code-snippet/v1.3.0/tui-code-snippet.min.js"></script>
    <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/FileSaver.js/1.3.3/FileSaver.min.js"></script>
    <script type="text/javascript" src="https://cdn.rawgit.com/nhnent/tui.component.colorpicker/1.0.2/dist/colorpicker.min.js"></script>
    <script type="text/javascript" src="{{ asset('js/tui-image-editor.min.js') }}"></script>
    <script type="text/javascript" src="{{ asset('js/service-basic.js') }}"></script>
@endpush