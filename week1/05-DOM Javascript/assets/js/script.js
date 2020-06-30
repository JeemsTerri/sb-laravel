var items = [
    ['001', 'Keyboard Logitek', 60000, 'Keyboard yang mantap untuk kantoran', 'logitek.jpg'], 
    ['002', 'Keyboard MSI', 300000, 'Keyboard gaming MSI mekanik', 'msi.jpg'],
    ['003', 'Mouse Genius', 50000, 'Mouse Genius biar lebih pinter', 'genius.jpeg'],
    ['004', 'Mouse Jerry', 30000, 'Mouse yang disukai kucing', 'jerry.jpg']
]

let cartItems = 0

var listBarang = document.getElementById('listBarang')
var inputSearch = document.getElementById("keyword")

// Function untuk membuat html list item
function showItems(data){
    let itemsList =''
    listBarang.innerHTML = ''

    for(let i = 0; i < data.length;i++){
        itemsList += `
            <div class="card p-3 col-xm-12 col-md-5 col-xl-3 m-1">
                <img src="assets/img/${data[i][4]}" class="card-img-top" alt="${data[i][4]}">
                <div class="card-body p-1">
                    <h5 class="card-title" id="itemName">${data[i][1]}</h5>
                    <p class="card-text" id="itemDesc">${data[i][3]}</p>
                    <p class="card-text">Rp ${data[i][2]}</p>
                    <a href="#" class="btn btn-primary " id="addCart" onclick="addToCart()">Tambahkan ke keranjang</a>
                </div>
            </div>
        `
    }
    listBarang.innerHTML = itemsList
}

// Search function dari nama item atau deskripsi
function searchItem(query){
    query = query.toLowerCase()
    var result = items.filter((item) => {
        if(item[1].toLowerCase().includes(query) || item[3].toLowerCase().includes(query))
            return item
    })
    return result
}

// Button onclick function
function addToCart(){
    cartItems++
    document.getElementById("cart").lastChild.innerHTML = `(${cartItems})`
}

// Tampilkan List barang awal
showItems(items)

// Tampilkan hasil search item
document.getElementById("formItem").onsubmit = (e) => {
    e.preventDefault()

    let query =  inputSearch.value

    searchedItem = searchItem(query)

    showItems(searchedItem)
}


inputSearch.addEventListener("keyup", function(e){
    let query = e.target.value

    searchedItem = searchItem(query)

    showItems(searchedItem)
})