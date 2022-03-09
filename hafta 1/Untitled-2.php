<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Hafta 1</title>
</head>
<body>
    <?php
    
    /* 
    çok satırlama açıklama 
    (shift + alt + a)
    */
    
    //Tek satırmlık açıklama
    
    /* kullanılan komut:
    echo
        komut içinde html etiketi kullanılmasını sağlar.
        çift veya tek tırnak kullanılır.
        Çift tırnak kullanıldığında içerisindeki değişkenlerin içeriğini ekrana yazar.
        nokta operatörü ile birleştirme işlemi yapılabilir
        Ters Slash (\) kaçış karakteridir.Özel ifadelerden önce kullanılır.
    */
    
    echo"<h3>Adnan Menderes Üniversitesi</h3>";
    echo"<h3>Adnan Menderes Üniversitesi</h3>" . "Aymes"; 
    
    echo"
    <ol>
        <li>Değişken isimleri $ ile başlar.</li>
        <li>Değişken isimleri sayısal ifade ile başlayamaz</li> 
        <li>Değişken isimlerinde boşluk kullanılmaz. İki kelime birinci_sınıf, birincisınıf, birinci-sınıf örnekleri kullanılabilir</li>
        <li>Değişken isimleri küçük-büyük harfe duyarlıdır. \$sayı != \$Sayı</li>
        <li>Değişken içeriğinde metinsel ifade varsa çift tırnak (\") veya tek tırnak (') kullanılabilir.</li>
    </ol>
    "
    
    ?>
</body>
</html>