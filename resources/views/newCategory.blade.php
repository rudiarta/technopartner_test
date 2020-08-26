<!DOCTYPE html>
<html>
<head>
    <title>Home</title>
</head>

    <form method="POST" action="/insert-category">
        @csrf
        <label>Name: </label>
        <input name="name" />
        <label>Type: </label>
        <select name="type_id">
            <option value="1">Pemasukan</option>
            <option value="2">Pengeluaran</option>
        </select>
        <input type="submit" value="submit" />
    </form>

    <ul>
        <li><a href="/category">Category</a></li>
        <li><a href="/transaction">Transaction</a></li>
    </ul>

</html>
