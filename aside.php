<style>
    .a-li{
        color: black;
        text-decoration: none;
    }
    a:hover{
        color: black;
        text-decoration: none;
    }
    .b-s{
        border: 0;
        box-shadow: none;
    }
</style>
<aside>
    <h3>Filter Options</h3>
    <div class="my-4 mx-1 px-2">
        <select name="#" id="#" class="px-2 py-2 item_filter">
            <option value="#" selected>Cattle Type</option>
            <option value="#">Location</option>
            <option value="#">Nutrients Levels</option>
        </select>
    </div>
    <div class="my-4 mx-1 px-2">
        <select name="#" id="#" class="px-2 py-2 item_filter">
            <option value="#">Cattle Type</option>
            <option value="#" selected>Location</option>
            <option value="#">Nutrients Levels</option>
        </select>
    </div>
    <div class="my-4 mx-1 px-2">
        <select name="#" id="#" class="px-2 py-2 item_filter">
            <option value="#">Cattle Type</option>
            <option value="#">Location</option>
            <option value="#" selected>Nutrients Levels</option>
        </select>
    </div>
    <div class="dropdown">
            <p class="mx-3" data-bs-toggle="dropdown" aria-expanded="false">
                Protein Content
                <i class="fa fa-angle-down px-2"></i>
            </p>
            <div class="dropdown-menu b-s" aria-labelledby="dropdownMenuButton">
                <div class="row">
                    <div>
                        <input type="checkbox" class="mt-2" name="b" id="b" checked>
                    </div>
                    <div>
                        <a class="dropdown-item" href="#">Energy Boosting</a>
                    </div>
                </div>
                <div class="row mt-2">
                    <div>
                        <input type="checkbox" name="b" class="mt-2" id="b" checked>
                    </div>
                    <div>
                        <a class="dropdown-item" href="#">Natural Ingredients</a>
                    </div>
                </div>
            </div>
    </div>
</aside>