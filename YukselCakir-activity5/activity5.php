<?php


$exchange_rates = [
    "USD" => ["CAD" => 1.35, "EUR" => 0.92],
    "CAD" => ["USD" => 0.74, "EUR" => 0.68],
    "EUR" => ["USD" => 1.09, "CAD" => 1.47]
];

$result = "";
$amount = "";
$converted_amount = "";
$from_currency = "";
$to_currency = "";

if ($_SERVER["REQUEST_METHOD"] == "GET" && isset($_GET["amount"])) {
    $amount = floatval($_GET["amount"]);
    $from_currency = $_GET["from_currency"];
    $to_currency = $_GET["to_currency"];

    if (isset($exchange_rates[$from_currency][$to_currency])) {
        $converted_amount = $amount * $exchange_rates[$from_currency][$to_currency];
    } else {
        $converted_amount = "error";
    }
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <title>Currency Calculation</title>
    <meta name="description" content="CENG 311 Inclass Activity 5" />
</head>
<body>
    <form action="activity5.php" method="GET">
        <table>
            <tr>
                <td>From:</td>
                <td><input type="text" name="amount" value="<?php echo htmlspecialchars($amount); ?>" required/></td>
                <td>Currency:</td>
                <td>
                    <select name="from_currency">
                        <option value="USD" <?php if ($from_currency == "USD") echo "selected"; ?>>US Dollar</option>
                        <option value="CAD" <?php if ($from_currency == "CAD") echo "selected"; ?>>Canadian Dollar</option>
                        <option value="EUR" <?php if ($from_currency == "EUR") echo "selected"; ?>>Euro</option>
                    </select>
                </td>
            </tr>
            <tr>
                <td>To:</td>
                <td><input type="text" name="converted_amount" value="<?php echo htmlspecialchars($converted_amount); ?>" readonly/></td>
                <td>Currency:</td>
                <td>
                    <select name="to_currency">
                        <option value="USD" <?php if ($to_currency == "USD") echo "selected"; ?>>US Dollar</option>
                        <option value="CAD" <?php if ($to_currency == "CAD") echo "selected"; ?>>Canadian Dollar</option>
                        <option value="EUR" <?php if ($to_currency == "EUR") echo "selected"; ?>>Euro</option>
                    </select>
                </td>
            </tr>
            <tr>
                <td colspan="4" style="text-align:right;">
                    <input type="submit" value="Convert"/>
                </td>
            </tr>
        </table>
    </form>
</body>
</html>
