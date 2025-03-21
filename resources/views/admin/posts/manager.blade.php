@extends('layouts.admin')

@section('content')
<div class="main-content-container container-fluid px-4">
    <div class="page-header row no-gutters py-4">
        <div class="col-12 col-sm-4 text-center text-sm-left mb-0">
            <a href="/manager/posts/create" class="btn btn-sm btn-accent ml-auto" title="Thêm mới" style="font-size: 14px">
                <i class="fa-solid fa-plus"></i>
                <span style="margin-left: 2px">Thêm mới bài viết</span>
            </a>
        </div>
    </div>
    <div class="row">
      <div class="col">
        <div class="card card-small mb-4">
            <div class="card-body p-0 pb-3 ">
                <table class="table">
                    <thead>
                        <tr>
                            <th width="10%" style="text-align: center;">STT</th>
                            <th width="20%">Hình ảnh</th>
                            <th width="30%">Tiêu đề</th>
                            <th width="20%">Ngày tạo</th>
                            <th width="20%">Thao tác</th>
                        </tr>
                    </thead>
                    <tbody>
                    @foreach($posts as $index => $post)
                        <tr>
                            <td width="10%" style="text-align: center;">{{ $index + 1 }}</td>
                            <td width="20%">
                                <img class="img-thumbnail" src="{{ $post->image }}" alt="{{ $post->title }}" style="width: 80%;">
                            </td>
                            <td width="30%">{{ $post->title }}</td>
                            <th width="20%">{{ $post->created_at->format('d/m/Y') }}</th>
                            <td>
                                <a href="/manager/posts/update/{{ $post->id }}" class="btn btn-sm btn-accent ml-auto" title="Chỉnh sửa">
                                    <i class="fa-solid fa-pen-to-square"></i>
                                </a>
                                <form action="/manager/posts/{{ $post->id }}" method="POST" style="display:inline-block;">
                                    @csrf
                                    @method('delete')
                                    <button type="submit" class="btn btn-danger btn-sm" title="Xóa">
                                        <i class="fa-solid fa-trash"></i>
                                    </button>
                                </form>
                            </td>
                        </tr>
                    @endforeach
                    </tbody>
                </table>
            <div class="form-row container ">
                <nav aria-label="Page navigation example" class="form-group col-md-10">
                    <ul class="pagination justify-content-end">
                        <li class="page-item {{ $page - 1 < 1 ? 'disabled' : '' }}">
                            <a class="page-link" href="/manager/posts?page=1"><i class="fa-solid fa-backward-fast"></i></i></a>
                        </li>
                        <li class="page-item  {{ $page - 1 < 1 ? 'disabled' : '' }}">
                            <a class="page-link" href="/manager/posts?page={{ $page - 1 }}"><i class="fa-solid fa-backward-step"></i></a>
                        </li>
                        <li class="page-item"><a class="page-link" href="#">{{ $page }}</a></li>
                        <li class="page-item {{ $page + 1 > $lastPage ? 'disabled' : '' }}">
                            <a class="page-link" href="/manager/posts?page={{ $page + 1 }}"><i class="fa-solid fa-forward-step"></i></a>
                        </li>
                        <li class="page-item" {{ $page + 1 > $lastPage ? 'disabled' : '' }}>
                            <a class="page-link" href="/manager/posts?page={{ $lastPage }}"><i class="fa-solid fa-forward-fast"></i></a>
                        </li>
                    </ul>
                </nav>
            </div>
            </div>
        </div>
      </div>
    </div>
    <!-- End Default Light Table -->
</div>
@endsection

@section('scripts')
@endsection