
<!-- PROGRAMMING & CODING BY AKASH KUMAR BASAK -->


@extends('layout.app')
<br><br|>
<div align="center" class="container">
<h1 align="center" class="bg-dark text-light">A2WD Task1</h1>
<h1 align="center" class="text-success">Add A Product</h1>
<div class="row col-3">
<div class="input-group mb-3">
  <select class="form-select" id="inputCategory">
    <option selected>Select Category</option>
    <option value="Mobile">Mobile</option>
    <option value="Laptop">Laptop</option>
    <option value="Speaker">Speaker</option>
  </select>
</div>
<div class="input-group mb-3">
  <select class="form-select" id="inputNBrand">
    <option selected>Select Brand</option>
    <option value="Apple">Apple</option>
    <option value="Samsung">Samsung</option>
    <option value="Xiaomi">Xiaomi</option>
  </select>
  <div class="input-group mt-3">
  <input type="text" class="form-control" placeholder="Product Name" aria-label="Productname" aria-describedby="basic-addon1" id="pname">
</div>
</div>
<div class="d-grid gap-2 mt-3">
<button type="button" class="btn btn-success" onclick="addProduct()">Success</button>
</div>
</div>
</div>

