<div>
    <table>
        <thead>
            <tr>
                @foreach($this->header as $column)
                    <th>
                        @lang($column['title'])
                    </th>
                @endforeach
            </tr>
        </thead>
        <tbody>
            @foreach($users as $user)
                <tr>
                    <td>
                        {{ $user->first_name }}
                    </td>
                    <td>
                        {{ $user->last_name }}
                    </td>
                    <td>
                        {{ $user->birthday }}
                    </td>
                </tr>
            @endforeach
        </tbody>
    </table>

    {{ $users->links() }}
</div>
