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
            View Product
        </div>
        <div class="w-full lg:w-3/4 mx-auto py-10">
            <table class="w-full ">
                <tr>
                    <th class="border py-2">sl.</th>
                    <th class="border py-2">Image</th>
                    <th class="border py-2">Product Name</th>
                    <th class="border py-2">Product Price</th>
                    <th class="border py-2">Action</th>
                </tr>
                <tr>
                    <td class="border text-center px-2 py-2">1</td>
                    <td class="border text-center px-2 py-2">Image</td>
                    <td class="border px-2 py-2">Product Name</td>
                    <td class="border text-center px-2 py-2">$100</td>
                    <td class="border text-center px-2 py-2">
                        <a href="">Edit</a>
                        /
                        <a href="">Delete</a>
                    </td>
                </tr>
            </table>
        </div>

    </section>
    <script src="/ProjectPHP/src/assets/js/main.js"></script>
</body>

</html>