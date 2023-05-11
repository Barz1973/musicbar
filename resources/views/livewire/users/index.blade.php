<div>
    <div class="card">
        <div class="card-body">
            <h3>List of Users</h3>
            <table class="table table-striped table-hovered">
                <thead>
                    <tr>
                        <th>
                            Name
                        </th>
                        <th>
                            Email
                        </th>
                    </tr>
                </thead>
                <tbody>
                   @foreach($users as $user)
                   <tr>
                        <td>{{$user->}}</td>
                    </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
    </div>
</div>