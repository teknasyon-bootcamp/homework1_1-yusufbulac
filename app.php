<?php

$age = 25;


if(0<=$age && $age<=14){
    echo "Çocuk";
}elseif(15<=$age && $age<=24){
    echo "Genç";
}elseif(25<=$age && $age<=64){
    echo "Yetişkin";
}elseif(65<=$age){
    echo "Yaşlı";
}else{
    echo "En az 0 değerini girebilirsiniz.";
}

/**
 * Bu ödevde age değişkeni içerisinde yer alan yaş değerinin bulunduğu
 * yaş grubu tespit edilip ekrana bu yaş grubunun ismi yazılmalıdır. 
 * 
 * 0-14 = Çocuk
 * 15-24 = Genç
 * 25-64 = Yetişkin
 * 65+ = Yaşlı
 * 
 * Ekran çıktısı için `echo` yada `print` kullanabilirsiniz.
 * 
 * > **Not**: Çıktıda sadece `Çocuk`, `Genç`, `Yetişkin` veya `Yaşlı`
 * yer almalıdır.
 * 
 * İyi çalışmalar.
 */
