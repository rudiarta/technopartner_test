<!DOCTYPE html>
<html>
<head>
    <title>Home</title>
</head>

    <form method="POST" action="/confirm-transaction">
        @csrf
        <input type="hidden" name="id" value="{{ $request->id }}"/>
        <label>Nominal: </label>
        <input name="nominal" value="{{ $request->nominal }}"/>
        <label>Description: </label>
        <input name="description" value="{{ $request->description }}"/>
        <label>Type: </label>
        <select name="type_id">
            @foreach ($category as $data)
                <option {{  $request->type_id == $data->id ? 'selected' : ''  }} value="{{ $data->id }}">{{ $data->name }}</option>
            @endforeach
        </select>
        <input type="submit" value="submit" />
    </form>

    <ul>
        <li><a href="/transaction">Transaction</a></li>
        <li><a href="/">Home</a></li>
    </ul>

</html>
