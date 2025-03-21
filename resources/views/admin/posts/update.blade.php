@extends('layouts.admin')

@section('content')
    <div class="container mt-5">
        <div class="row">
            <div class="col-md-10 offset-md-1">
                <div class="card">
                    <div class="card-header">
                        <h2 style="margin-top: 8px;">Chỉnh sửa bài viết</h2>
                    </div>
                    <div class="card-body">
                        @if ($errors->any())
                            <div class="alert alert-danger" style="color: #fff">
                                @foreach ($errors->all() as $error)
                                    <p style="margin: 0">{{ $error }}</p>
                                @endforeach
                            </div>
                        @endif
                        <form action="/manager/posts/update" method="POST" enctype="multipart/form-data">
                            @csrf
                            <input type="hidden" id="id" name="id" value="{{ $post->id }}">
                            <div class="row">
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label for="title">Tiêu đề</label>
                                        <input type="text" name="title" id="title" class="form-control"
                                            value="{{ $post->title }}" required>
                                    </div>
                                    <div class="form-group">
                                        <label for="sub_content">Tóm tắt bài viết</label>
                                        <textarea name="sub_content" id="sub_content" class="form-control"
                                            rows="10">{{ $post->sub_content }}</textarea>
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label for="image">Ảnh bài viết</label>
                                        <input type="file" name="image-input" id="image-input" class="form-control-file">
                                    </div>
                                    <input type="text" id="image" class="d-none" name="image">
                                    <div class="form-group">
                                        <label for="preview">Xem trước ảnh</label>
                                        <div
                                            class="img-preview-container {{ $post->image == null ? "d-none" : "" }} position-relative">
                                            <img id="preview" class="img-thumbnail" src="{{ $post->image }}"
                                                style="width: 100%;">
                                            <button type="button" id="remove-image"
                                                class="btn btn-sm position-absolute shadow bg-danger"
                                                style="top: 10px; right: 10px; font-size: 16px;">&times;</button>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-md-12">
                                    <div class="form-group">
                                        <label for="editor">Nội dung bài viết</label>
                                        <textarea name="content" id="editor" class="form-control" rows="15"></textarea>
                                    </div>
                                </div>
                            </div>
                            <div class="d-flex justify-content-end mt-3">
                                <button type="submit" class="btn btn-primary mr-2" style="font-size: 16px;">Chỉnh sửa bài
                                    viết</button>
                                {{-- <button id="test" class="btn btn-secondary">Test</button> --}}
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection

@section('scripts')
    <script type="module">
        import {
            ClassicEditor,
            AutoImage,
            Autosave,
            Base64UploadAdapter,
            BlockQuote,
            Bold,
            CloudServices,
            Essentials,
            Heading,
            ImageBlock,
            ImageCaption,
            ImageInline,
            ImageInsert,
            ImageInsertViaUrl,
            ImageResize,
            ImageStyle,
            ImageTextAlternative,
            ImageToolbar,
            ImageUpload,
            Indent,
            IndentBlock,
            Italic,
            Link,
            LinkImage,
            Paragraph,
            Table,
            TableCaption,
            TableCellProperties,
            TableColumnResize,
            TableProperties,
            TableToolbar,
            Underline
        } from 'ckeditor5';

        const LICENSE_KEY = 'GPL';

        const editorConfig = {
            toolbar: {
                items: [
                    'heading',
                    '|',
                    'bold',
                    'italic',
                    'underline',
                    '|',
                    'link',
                    'insertImage',
                    'insertTable',
                    'blockQuote',
                    '|',
                    'outdent',
                    'indent'
                ],
                shouldNotGroupWhenFull: false
            },
            plugins: [
                AutoImage,
                Autosave,
                Base64UploadAdapter,
                BlockQuote,
                Bold,
                CloudServices,
                Essentials,
                Heading,
                ImageBlock,
                ImageCaption,
                ImageInline,
                ImageInsert,
                ImageInsertViaUrl,
                ImageResize,
                ImageStyle,
                ImageTextAlternative,
                ImageToolbar,
                ImageUpload,
                Indent,
                IndentBlock,
                Italic,
                Link,
                LinkImage,
                Paragraph,
                Table,
                TableCaption,
                TableCellProperties,
                TableColumnResize,
                TableProperties,
                TableToolbar,
                Underline
            ],
            heading: {
                options: [
                    {
                        model: 'paragraph',
                        title: 'Paragraph',
                        class: 'ck-heading_paragraph'
                    },
                    {
                        model: 'heading1',
                        view: 'h1',
                        title: 'Heading 1',
                        class: 'ck-heading_heading1'
                    },
                    {
                        model: 'heading2',
                        view: 'h2',
                        title: 'Heading 2',
                        class: 'ck-heading_heading2'
                    },
                    {
                        model: 'heading3',
                        view: 'h3',
                        title: 'Heading 3',
                        class: 'ck-heading_heading3'
                    },
                    {
                        model: 'heading4',
                        view: 'h4',
                        title: 'Heading 4',
                        class: 'ck-heading_heading4'
                    },
                    {
                        model: 'heading5',
                        view: 'h5',
                        title: 'Heading 5',
                        class: 'ck-heading_heading5'
                    },
                    {
                        model: 'heading6',
                        view: 'h6',
                        title: 'Heading 6',
                        class: 'ck-heading_heading6'
                    }
                ]
            },
            image: {
                toolbar: [
                    'toggleImageCaption',
                    'imageTextAlternative',
                    '|',
                    'imageStyle:inline',
                    'imageStyle:wrapText',
                    'imageStyle:breakText',
                    '|',
                    'resizeImage'
                ]
            },
            initialData: '{!! $post->content !!}',
            licenseKey: LICENSE_KEY,
            link: {
                addTargetToExternalLinks: true,
                defaultProtocol: 'https://',
                decorators: {
                    toggleDownloadable: {
                        mode: 'manual',
                        label: 'Downloadable',
                        attributes: {
                            download: 'file'
                        }
                    }
                }
            },
            placeholder: '',
            table: {
                contentToolbar: ['tableColumn', 'tableRow', 'mergeTableCells', 'tableProperties', 'tableCellProperties']
            },
            disallowedContent: 'img{width,height}'
        };

        ClassicEditor.create(document.querySelector('#editor'), editorConfig)
            .then(editor => {
                editor.ui.view.editable.element.style.height = '300px';
            })
            .catch(error => {
                console.error(error);
            });
    </script>

    <script>
        document.addEventListener('DOMContentLoaded', () => {
            const imageInput = document.getElementById('image-input');
            const image = document.getElementById('image');
            const base64String = "{{ $post->image }}";
            console.log(base64String);

            const base64ToFile = (base64, filename) => {
                const arr = base64.split(',');
                const mime = arr[0].match(/:(.*?);/)[1];
                const binary = atob(arr[1]);
                const len = binary.length;
                const uint8Array = new Uint8Array(len);

                for (let i = 0; i < len; i++) {
                    uint8Array[i] = binary.charCodeAt(i);
                }

                const blob = new Blob([uint8Array], { type: mime });
                const file = new File([blob], filename, { type: blob.type });

                return file;
            }

            const imageFile = base64ToFile(base64String, 'image');
            const dataTransfer = new DataTransfer(imageFile);
            dataTransfer.items.add(imageFile);
            imageInput.files = dataTransfer.files;

            image.value = base64String;
        });

        document.getElementById('image-input').addEventListener('change', (event) => {
            const file = event.target.files[0];
            const imgPreviewContainer = document.querySelector('.img-preview-container');
            const image = document.getElementById('image');
            const imagePreview = document.getElementById('preview');

            if (file) {
                const reader = new FileReader();
                reader.onload = (e) => {
                    image.value = e.target.result;
                    imagePreview.setAttribute('src', e.target.result);
                    imgPreviewContainer.classList.remove('d-none');
                };
                reader.readAsDataURL(file);
            }
        });

        document.getElementById('remove-image').addEventListener('click', (event) => {
            const imgPreviewContainer = document.querySelector('.img-preview-container');
            const image = document.getElementById('image');
            const imagePreview = document.getElementById('preview');
            const imageInput = document.getElementById('image-input');

            const dataTransfer = new DataTransfer();
            imageInput.files = dataTransfer.files;

            image.value = '';
            imagePreview.setAttribute('src', '');
            imgPreviewContainer.classList.add('d-none');

        });

        // document.getElementById('test').addEventListener('click', (event) => {
        //     const image = document.getElementById('image');
        //     console.log(image.value);
        // });
    </script>
@endsection