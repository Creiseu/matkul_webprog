document.getElementById("txt_nama").onkeyup = function(){
    let txnama = document.getElementById("txt_nama").value;
    let txnama2 = txnama.toUpperCase();
    document.getElementById("txt_nama").value = txnama2;
};
document.getElementById("txt_pasw2").onchange = function(){
    let pass1 = document.getElementById("txt_pasw").value;
    let pass2 = document.getElementById("txt_pasw2").value;
    if(pass1 === pass2){
        alert ("Password sama");
        document.getElementById("btn").disabled = false;
    }else{
        document.getElementById("btn").disabled = true;
        alert ("Password Tidak Sama");
        
    }
    
};