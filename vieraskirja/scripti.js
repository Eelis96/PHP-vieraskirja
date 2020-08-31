function kirjaudu(){
    const salasana = "admin";
    var syöte = prompt('Salasana');

    if(syöte === salasana){
        window.location.href = "hallintapaneeli.php"
    }else{
        alert('Väärä Salasana!');
    }
}

function takaisin(){
    window.location.href = "index.php";
}