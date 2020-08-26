<!DOCTYPE html>
<html>
<head>
    <title>Home</title>
</head>

    <table>
        @foreach ($datas as $data)
            <tr>
                <td>{{ $data->nominal }}</td>
                <td>{{ $data->description }}</td>
                <td><a href="/delete-transaction?id={{ $data->id }}">Delete</a> |
                <a href="/update-transaction?id={{ $data->id }}&nominal={{ $data->nominal }}&description={{ $data->description }}&type_id={{ $data->category_id }}">Update</a></td>
            </tr>
        @endforeach
    </table>

    <ul>
        <li><a href="/new-transaction">New Transaction</a></li>
        <li><a href="/category">Category</a></li>
        <li><a href="/">Home</a></li>
    </ul>

</html>
