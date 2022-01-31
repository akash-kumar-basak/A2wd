
function addProduct()
{
    var category = document.getElementById('inputCategory').value;
    var brand = document.getElementById('inputNBrand').value;
    var productname = document.getElementById('pname').value;
    



    var url = '/addproduct';
    var allInputData = {Catagory:category, Brand:brand, Productname:productname};

    axios.post(url, allInputData).then
    (function (response)
    {
        confirm('Successfully A new product created');
    })
    .catch(function (error)
     {
        alert('Signup faild');
    });

}


