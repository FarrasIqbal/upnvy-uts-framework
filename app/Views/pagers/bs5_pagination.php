<?php $pager->setSurroundCount(2) ?>

<nav aria-label="Page navigation" class="mt-5">
    <ul class="pagination justify-content-center">

        <?php if ($pager->hasPrevious()) : ?>
            <li class="page-item">
                <a class="page-link text-success" href="<?= $pager->getFirst() ?>" aria-label="First">
                    <span aria-hidden="true">&laquo; First</span>
                </a>
            </li>
            <li class="page-item">
                <a class="page-link text-success" href="<?= $pager->getPrevious() ?>" aria-label="Previous">
                    <span aria-hidden="true">Previous</span>
                </a>
            </li>
        <?php endif ?>

        <?php foreach ($pager->links() as $link) : ?>
            <li class="page-item <?= $link['active'] ? 'active' : '' ?>">
                <a class="page-link <?= $link['active'] ? 'bg-success border-success text-white' : 'text-success' ?>" href="<?= $link['uri'] ?>">
                    <?= $link['title'] ?>
                </a>
            </li>
        <?php endforeach ?>

        <?php if ($pager->hasNext()) : ?>
            <li class="page-item">
                <a class="page-link text-success" href="<?= $pager->getNext() ?>" aria-label="Next">
                    <span aria-hidden="true">Next</span>
                </a>
            </li>
            <li class="page-item">
                <a class="page-link text-success" href="<?= $pager->getLast() ?>" aria-label="Last">
                    <span aria-hidden="true">Last &raquo;</span>
                </a>
            </li>
        <?php endif ?>

    </ul>
</nav>