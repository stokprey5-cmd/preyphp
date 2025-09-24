<?php
// price_discount.php
$subtotal = floatval($_GET['subtotal'] ?? 0); // contoh: ?subtotal=750000
$is_vip = isset($_GET['vip']) && $_GET['vip']=='1';

$discount = 0.0;

if ($subtotal >= 1000000) {
    $discount = 0.10; // 10%
} elseif ($subtotal >= 500000) {
    $discount = 0.05; // 5%
} else {s
    $discount = 0.0;
}

// tambahan untuk VIP
if ($is_vip) {
    $discount += 0.03; // tambahan 3%
}

$total = $subtotal * (1 - $discount);

echo "Subtotal: Rp " . number_format($subtotal,0,',','.') . "<br>";
echo "Diskon: " . ($discount*100) . "%<br>";
echo "<strong>Total setelah diskon: Rp " . number_format($total,0,',','.') . "</strong>";
?>
