<!DOCTYPE html>
<html>
<head>
    <title>Home</title>
</head>

    <h3>Current Balance:</h3>
    @php
        echo $current;
        echo "</br>";
    @endphp

    <h3>Income Balance:</h3>
    @php
        echo $income;
        echo "</br>";
    @endphp

    <h3>Outcome Balance:</h3>
    @php
        echo $outcome;
        echo "</br>";
    @endphp

    <ul>
        <li><a href="/category">Category</a></li>
        <li><a href="/transaction">Transaction</a></li>
    </ul>

</html>
