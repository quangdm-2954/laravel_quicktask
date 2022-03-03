@extends('layouts.master')
@section('users', 'active')
@section('title', 'QuickTask|Users')
@section('content')
    <div class="content">
        <div class="container-fluid">
            <div class="row">
                <div class="col-md-12">
                    <div class="card">
                        <div class="header">
                            <h2 class="title">{{ __('List Users') }}</h2>
                            <p class="category">{{ __('All users of systems') }}</p>
                        </div>
                        <div class="content table-responsive table-full-width">
                            <table class="table table-hover table-striped">
                                <thead class="thead-dark">
                                    <th>ID</th>
                                    <th>{{ __('First Name') }}</th>
                                    <th>{{ __('Last Name') }}</th>
                                    <th>{{ __('User Name') }}</th>
                                    <th>{{ __('Email') }}</th>
                                    <th>{{ __('Status') }}</th>
                                    <th>{{ __('Action') }}</th>
                                </thead>
                                <tbody>
                                    @foreach ($users as $key => $user)
                                        <tr>
                                            <td>{{ ($users->currentpage() - 1) * $users->perpage() + $key + 1 }}</td>
                                            <td class="text-truncate">{{ $user->first_name }}</td>
                                            <td class="text-truncate">{{ $user->last_name }}</td>
                                            <td class="text-truncate">{{ $user->username }}</td>
                                            <td class="text-truncate">{{ $user->email }}</td>
                                            <td class="text-truncate">
                                                @if ($user->isActive)
                                                    {{ __('Active') }}
                                                @else
                                                    {{ __('Deactive') }}
                                                @endif
                                            </td>
                                            <td>
                                                <a href="{{ route('users.posts', $user->id) }}"
                                                    class="btn btn-info">{{ __('List Posts') }}</a>
                                                <a href="{{ route('users.show', $user->id) }}"
                                                    class="btn btn-success">{{ __('View') }}</a>
                                                <a href="{{ route('users.edit', $user->id) }}"
                                                    class="btn btn-primary">{{ __('Update') }}</a>
                                                <form style="display: inline" id="deleteForm"
                                                    action="{{ route('users.destroy', $user->id) }}" method="post">
                                                    @csrf
                                                    @method('DELETE')
                                                    <button onclick="return confirm('Are you sure?')" class="btn btn-danger"
                                                        data-toggle="tooltip" data-placement="top" title="Delete">
                                                        {{ __('Delete') }}
                                                    </button>
                                                </form>
                                            </td>
                                        </tr>
                                    @endforeach
                                </tbody>
                            </table>
                            {{ $users->links() }}
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
