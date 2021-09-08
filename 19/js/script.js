// ambil elemen yg dibutuhkan
var keyword = document.getElementById('keyword');
var tombolCari = document.getElementById('tombol-cari');
var container = document.getElementById('container');

// tambahkan event ketika keyword ditulis
keyword.addEventListener('keyup', function() {
    
    // buat ojbject ajax
    var xhr = new XMLHttpRequest();

    // cek kesiapan ajax nya
    xhr.onreadystatechange = function(){
        if( xhr.readyState == 4 && xhr.status == 200){
            container.innerHTML = xhr.responseText;
        }
    }
    // eksekusi ajax
    xhr.open('GET', 'ajax/gunung.php?keyword=' + keyword.value, true);
    xhr.send();
});