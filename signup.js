var accountTC = document.querySelector(".account-tc");
accountTC.style.display = 'flex';

function closeTC() {
    var accountTC = document.querySelector(".account-tc");
    accountTC.style.display = 'none';
}

document.addEventListener('click', function(e) {
    var accountTC = document.querySelector(".account-tc");
    var tcContainer = document.querySelector(".tc-container");
    if(accountTC.contains(e.target) && !tcContainer.contains(e.target)) {
        accountTC.style.display = 'none';
    }
})

function showSellerTC() {
    var accountTC = document.querySelector(".account-tc");
    var sellerTC = document.querySelector("#seller-tc");
    var sellerTCtext = document.querySelector("#seller-tc-text");
    var buyerTC = document.querySelector("#buyer-tc");
    var buyerTCtext = document.querySelector("#buyer-tc-text");
    accountTC.style.display = 'flex';
    sellerTC.style.display = 'block';
    sellerTCtext.style.display = 'block';
    buyerTC.style.display = 'none';
    buyerTCtext.style.display = 'none';
}

function showBuyerTC() {
    var accountTC = document.querySelector(".account-tc");
    var buyerTC = document.querySelector("#buyer-tc");
    var buyerTCtext = document.querySelector("#buyer-tc-text");
    var sellerTC = document.querySelector("#seller-tc");
    var sellerTCtext = document.querySelector("#seller-tc-text");
    accountTC.style.display = 'flex';
    buyerTC.style.display = 'block';
    buyerTCtext.style.display = 'block';
    sellerTC.style.display = 'none';
    sellerTCtext.style.display = 'none';
}

var accountBuyer = document.querySelector("#account-buyer");
var accountSeller = document.querySelector("#account-seller");
var accountBlockBuyer = document.querySelector("#account-block-buyer");
var accountBlockSeller = document.querySelector("#account-block-seller");
accountBuyer.addEventListener('click', function(){
    accountBlockBuyer.style.color = 'red';
    accountBlockSeller.style.color = 'black';
})
accountSeller.addEventListener('click', function(){
    accountBlockSeller.style.color = 'red';
    accountBlockBuyer.style.color = 'black';
})

var genderMale = document.querySelector("#gender-male");
var genderFemale = document.querySelector("#gender-female");
var genderBlockMale = document.querySelector("#gender-block-male");
var genderBlockFemale = document.querySelector("#gender-block-female");
genderMale.addEventListener('click', function(){
    genderBlockMale.style.color = 'red';
    genderBlockFemale.style.color = 'black';
})
genderFemale.addEventListener('click', function(){
    genderBlockFemale.style.color = 'red';
    genderBlockMale.style.color = 'black';
})