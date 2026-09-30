<!DOCTYPE html>
<html lang="vi">
<head>
    <meta charset="UTF-8">
    <title>Tính diện tích hình chữ nhật</title>
    <style>
        table {
            background-color: #fff8d6;
            border: 1px solid #dcdcdc;
            margin: 20px auto;
            padding: 10px;
        }
        th {
            background-color: #9ed08b;
            color: #fafbfa;
            font-family: 'Comic Sans MS', cursive, sans-serif;
            font-size: 18px;
            padding: 8px;
        }
        td {
            padding: 5px 10px;
            color: #4a3b32;
        }
        input[type="number"], input[type="text"] {
            width: 180px;
            padding: 3px;
        }
        .readonly-field {
            background-color: #ffe4e1;
        }
        .btn-container {
            text-align: center;
            padding-top: 8px;
        }
    </style>
</head>
<body>

<?php
$chieu_dai = "";
$chieu_rong = "";
$dien_tich = "";

if (isset($_POST['tinh'])) {
    // Lấy dữ liệu từ form
    $chieu_dai = $_POST['chieu_dai'];
    $chieu_rong = $_POST['chieu_rong'];
    
    // Tính diện tích 
    if(is_numeric($chieu_dai) && is_numeric($chieu_rong) && $chieu_dai > 0 && $chieu_rong > 0) {
        $dien_tich = $chieu_dai * $chieu_rong;
    }else 
    {
        $dien_tich = "Vui lòng nhập số hợp lệ !";
    }
    
}
?>
<form name="form_dien_tich" action="" method="POST">
    <table align="center">
        <tr>
            <th colspan="2">DIỆN TÍCH HÌNH CHỮ NHẬT</th>
        </tr>
        <tr>
            <td>Chiều dài:</td>
            <td>
                <input type="number" step="any" name="chieu_dai" value="<?php echo htmlspecialchars($chieu_dai); ?>" required>
            </td>
        </tr>
        <tr>
            <td>Chiều rộng:</td>
            <td>
                <input type="number" step="any" name="chieu_rong" value="<?php echo htmlspecialchars($chieu_rong); ?>" required>
            </td>
        </tr>
        <tr>
            <td>Diện tích:</td>
            <td>
                <!-- Ô hiển thị kết quả: không cho phép sửa -->
                <input type="text" class="readonly-field" name="dien_tich" value="<?php echo htmlspecialchars($dien_tich); ?>" readonly>
            </td>
        </tr>
        <tr>
            <td colspan="2" class="btn-container">
                <input type="submit" name="tinh" value="Tính">
            </td>
        </tr>
    </table>
</form>

</body>
</html>