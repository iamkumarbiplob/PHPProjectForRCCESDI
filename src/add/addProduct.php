<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Add Products</title>
    <link rel="stylesheet" href="/ProjectPHP/src/output.css">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined:opsz,wght,FILL,GRAD@20..48,100..700,0..1,-50..200" />
</head>

<body>

    <div class="bg-slate-300">
        <section id="navBar" class="container mx-auto py-3 px-2">
            <div class="flex flex-wrap flex-row items-center justify-between relative">
                <div class="text-2xl font-bold">Logo</div>
                <div class=" flex lg:hidden items-center justify-center" onclick="showMenu()">
                    <span class="" id="navMenuButtonOn">
                        <span class="material-symbols-outlined">
                            menu
                        </span>
                    </span>
                    <span class="hidden" id="navMenuButtonOff">
                        <span class="material-symbols-outlined">
                            close
                        </span>
                    </span>

                </div>

                <nav class="hidden lg:flex flex-wrap flex-row gap-2 justify-end font-bold items-center absolute lg:static -bottom-[130px] right-0" id="navContent">
                    <a href="/ProjectPHP/src/add/addProduct.php" class="px-3 py-2 bg-red-300 hover:bg-red-500 hover:text-gray-200 rounded-xl">Add Product</a>
                    <a href="/ProjectPHP/src/view/viewProduct.php" class="px-3 py-2 bg-red-300 hover:bg-red-500 hover:text-gray-200 rounded-xl">View Product</a>
                    <a href="" class="px-3 py-2 bg-red-300 hover:bg-red-500 hover:text-gray-200 rounded-xl">Update Product</a>
                </nav>
            </div>
        </section>
    </div>
    <section id="addProduct">
        <div class="text-center text-2xl bg-amber-200 font-bold py-2">
            Add Product
        </div>
        <div class="w-full lg:w-3/4 mx-auto py-10">
            <form>
                <div class="flex flex-wrap items-center my-1">
                    <label for="prodImage" class="w-1/3 text-right pr-10"> Product Image</label>
                    <input type="file" name="prodImage" id="prodImage" placeholder="Image" class="w-2/3 px-3 py-1 text-md border" />
                </div>
                <div class="flex flex-wrap items-center my-1">
                    <label for="prodName" class="w-1/3 text-right pr-10"> Product Name</label>
                    <input type="text" name="prodName" id="prodName" placeholder="Enter Product Name" class="w-2/3 px-3 py-1 text-md border" />
                </div>
                <div class="flex flex-wrap items-center my-1">
                    <label for="prodPrice" class="w-1/3 text-right pr-10"> Product Price</label>
                    <input type="text" name="prodPrice" id="prodPrice" placeholder="Product Price" class="w-2/3 px-3 py-1 text-md border" />
                </div>
                <div class="text-center my-4">
                    <button type="submit" class="border-2 bg-green-400 hover:bg-green-700 text-gray-800 hover:text-red-100 duration-300 font-semibold rounded-2xl px-3 py-2">Add Product</button>
                </div>
            </form>
        </div>

    </section>
    <script src="/ProjectPHP/src/assets/js/main.js"></script>
</body>

</html>