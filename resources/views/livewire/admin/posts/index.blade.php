<div>
    <div class="page-wrapper">
        @if (session('message'))
        <div class="alert alert-success">{{ session('message')}}</div>
        @endif
        <div class="content">
            <div class="row">
                <div class="col-sm-8 col-4">
                    <h4 class="page-title">Posts</h4>
                </div>
                <div class="col-sm-4 col-8 text-right m-b-30">
                    <a class="btn btn-primary btn-sm float-end" href="{{ route('posts.create') }}"><i
                            class="fa fa-plus"></i> Add
                        Post</a>
                </div>
            </div>
            <div class="row">
                <div class="row">
                    <div class="col-md-12">
                        <div class="table-responsive">
                            <table class="table table-striped custom-table">
                                <thead>
                                    <tr>
                                        <th>#</th>
                                        <th>Post Title</th>
                                        <th>Post Slug</th>
                                        <th>Post Category</th>
                                        <th>Created Date</th>
                                        <th class="text-right">Action</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @forelse ($posts as $post)
                                    <tr>
                                        <td>#</td>
                                        <td class="text-capitalize">{{ $post->title }}</td>
                                        <td class="text-capitalize">{{ $post->slug }}</td>
                                        <td>{{ ucfirst(str_replace('_', ' ', $post->category)) }}</td>
                                        <td>{{ $post->created_at }}</td>
                                        <td class="text-right">
                                            <div class="dropdown dropdown-action">
                                                <a href="#" class="action-icon dropdown-toggle" data-toggle="dropdown"
                                                    aria-expanded="false"><i class="fa fa-ellipsis-v"></i></a>
                                                <div class="dropdown-menu dropdown-menu-right">

                                                    <a class="dropdown-item"
                                                        href="{{ url('admin/posts/' . $post->id . '/view' ) }}"><i
                                                            class="fa fa-eye m-r-5"></i>
                                                        View</a>
                                                    <a class="dropdown-item"
                                                        href="{{ url('admin/posts/' . $post->id . '/edit' ) }}"><i
                                                            class="fa fa-pencil m-r-5"></i>
                                                        Edit</a>
                                                    <a class="dropdown-item"
                                                        href="{{ url('admin/posts/' . $post->id . '/delete' ) }}"><i
                                                            class="fa fa-trash-o m-r-5"></i> Delete</a>
                                                </div>
                                            </div>
                                        </td>
                                    </tr>
                                    @empty
                                    <span>No Data Found!</span>
                                    @endforelse

                                </tbody>
                            </table>
                            {{-- <div class="d-flex float-end">
                                {{ $posts->links() }}
                            </div> --}}
                        </div>
                    </div>
                </div>
            </div>
        </div>

    </div>
</div>