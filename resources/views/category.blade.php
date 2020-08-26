<!DOCTYPE html>
<html>
<head>
    <title>Home</title>
</head>

    <table>
        @foreach ($datas as $data)
            <tr>
                <td>{{ $data->name }}</td>
                <td><a href="/delete-category?id={{ $data->id }}">Delete</a> |
                <a href="/update-category?id={{ $data->id }}&name={{ $data->name }}&type_id={{ $data->type_id }}">Update</a></td>
            </tr>
        @endforeach
    </table>

    <ul>
        <li><a href="/">Home</a></li>
        <li><a href="/new-category">New Category</a></li>
        <li><a href="/transaction">Transaction</a></li>
    </ul>

</html>
