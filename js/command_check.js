// 入力回数
var val = 0;
/**
 * コマンド判別
 * @param num 入力キーのASCIIコード
 */
function ConamiCommand(num){
	if ((val === 0 || val === 1 ) && num === 38){
        console.log(val);
		val++;
	} else if ((val === 2 || val === 3 ) && num === 40){
        console.log(val);
		val++;
	} else if ((val === 4 || val === 6 ) && num === 37){
        console.log(val);
		val++;
	} else if ((val === 5 || val === 7 ) && num === 39){
        console.log(val);
		val++;
	} else if (val === 8 && num === 66){
        console.log(val);
		val++;
	} else if (val === 9 && num === 65){
        console.log(val);
		val++;
	} else if ((val === 10 ) && num === 13){
        console.log(val);
		val++;
		secret();
	} else {
        console.log(val);
		val=0;
	}
}
function secret(){
    var bbs_id = document.getElementById("bbs_id").value;
    location.href = '../bbs_secret.php?bbs_id='+bbs_id;
}