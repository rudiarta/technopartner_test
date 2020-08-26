<!DOCTYPE html>
<html>
<head>
    <title>Home</title>
</head>

    <form method="POST" action="/insert-transaction">
        @csrf
        <label>Nominal: </label>
        <input name="nominal" />
        <label>Description: </label>
        <input name="description" />
        <label>Type: </label>
        <select name="type_id">
            @foreach ($category as $data)
                <option value="{{ $data->id }}">{{ $data->name }}</option>
            @endforeach
        </select>
        <input type="submit" value="submit" />
    </form>

    <ul>
        <li><a href="/transaction">Transaction</a></li>
        <li><a href="/">Home</a></li>
    </ul>

</html>
