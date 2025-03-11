<div class="container-fluid p-0">
    <nav class="navbar navbar-expand-lg bg-dark navbar-dark py-2 py-lg-0 px-lg-5">
        <a href="index.html" class="navbar-brand d-block d-lg-none">
            <h1 class="m-0 display-4 text-uppercase text-primary">Biz<span class="text-white font-weight-normal">News</span></h1>
        </a>
        <button type="button" class="navbar-toggler" data-toggle="collapse" data-target="#navbarCollapse">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse justify-content-between px-0 px-lg-3" id="navbarCollapse">
            <div class="navbar-nav mr-auto py-0">
                <a href="index.php" class="nav-item nav-link active">Home</a>
                <a href="category.php" class="nav-item nav-link">Category</a>
                <a href="single.php" class="nav-item nav-link">Single News</a>
                <div class="nav-item dropdown">
                    <a href="#" class="nav-link dropdown-toggle" data-toggle="dropdown">Dropdown</a>
                    <div class="dropdown-menu rounded-0 m-0 bg-warning">
                        <?php
                        foreach ($categories as $category):
                        ?>
                            <a href="index.php?category=<?= $category['id'] ?>" class="dropdown-item"><?= $category['name'] ?></a>
                        <?php
                        endforeach
                        ?>
                    </div>
                </div>
                <a href="contact.php" class="nav-item nav-link">Contact</a>
                <a href="crudaothur.php" class="nav-item nav-link">CRUD(Author)</a>
            </div>
            <div class="input-group ml-auto d-none d-lg-flex" style="width: 100%; max-width: 300px;">
                <form action="index.php" class="d-flex">
                    <input type="hidden" name="page" value="1">
                    <input type="text" name="keyword" class="form-control border-0" placeholder="Keyword"
                    value="<?=isset($_GET['keyword']) ? $_GET['keyword'] : ""?>">
                    <div class="input-group-append">
                        <button class="input-group-text bg-primary text-dark border-0 px-3"><i
                                class="fa fa-search"></i></button>
                    </div>
                </form>
            </div>
        </div>
    </nav>
</div>