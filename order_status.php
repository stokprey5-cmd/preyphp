<?php
// order_status.php
$status = $_GET['status'] ?? 'pending'; // contoh: ?status=shipped

switch ($status) {
    case 'pending':
        $msg = "Pesanan Anda sedang menunggu konfirmasi pembayaran.";
        break;
    case 'processing':
        $msg = "Pesanan sedang diproses di gudang.";
        break;
    case 'shipped':
        $msg = "Pesanan telah dikirim. Melacak pengiriman...";
        break;
    case 'delivered':
        $msg = "Pesanan sudah diterima. Terima kasih!";
        break;
    case 'cancelled':
        $msg = "Pesanan dibatalkan. Hubungi customer service.";
        break;
    default:
        $msg = "Status tidak dikenal.";
        break;
}

echo "<h3>Status: $status</h3>";
echo $msg;
?>
