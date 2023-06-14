@extends('layouts.parent')

@section('content')
    <div class="container">
        <div class="card">
            <div class="card-body">
                <h5 class="card-title">
                    Edit Roles
                </h5>

                <table class="table table-striped table-bordered">
                    <tr>
                        <th>Roles</th>
                        <td>
                            <form action="{{ route('dashboard.user.update', $user->id) }}" method="POST">
                                @csrf
                                @method('PUT')

                                <div class="input-group mb-3">
                                    <select class="form-select" name="roles" id="role">
                                        <option value="USER"
                                            {{ $user->roles == 'USER' ? 'selected' : '' }}>
                                            USER</option>
                                        <option value="USER"
                                            {{ $user->roles == 'ADMIN' ? 'selected' : '' }}>
                                            ADMIN</option>
                                    </select>
                                    <button type="submit" class="btn btn-primary">Update</button>
                                </div>
                            </form>
                        </td>
                    </tr>
                </table>

            </div>
        </div>
    </div>
@endsection