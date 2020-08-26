<!DOCTYPE html>
<html>
<head>
    <title>Home</title>
</head>

    <form method="POST" action="/confirm-category">
        @csrf
        <input type="hidden" name="id" value="{{ $request->id }}"/>
        <label>Name: </label>
        <input type="text" name="name" value="{{ $request->name }}"/>
        <label>Type: </label>
        <select name="type_id">
            <option {{  $request->type_id == 1 ? 'selected' : ''  }} value="1">Pemasukan</option>
            <option {{  $request->type_id == 2 ? 'selected' : ''  }} value="2">Pengeluaran</option>
        </select>
        <input type="submit" value="submit" />
    </form>

    <ul>
        <li><a href="/category">Category</a></li>
        <li><a href="/transaction">Transaction</a></li>
    </ul>

</html>
