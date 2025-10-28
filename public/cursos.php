<?php
require_once __DIR__ . '/../includes/courses-functions.php';
include_once __DIR__ . '/../partials/page-top.php';

$area = $_GET['area'] ?? '';
$courses = $area ? getCoursesByArea($area) : getAllCourses();
?>

<a href="index.php" class="btn-voltar">← Voltar à Página Inicial</a>

<h2 style="margin-bottom:1.5rem;">Catálogo de Cursos<?= $area ? " - " . ucfirst($area) : "" ?></h2>

<div class="card-grid">
    <?php if (empty($courses)): ?>
        <p>Nenhum curso encontrado para esta área.</p>
    <?php else: ?>
        <?php foreach ($courses as $course):
            $img = isset($course['img']) && $course['img'] !== '' ? $course['img'] : '/img/courses/default.jpg';
            $title = isset($course['title']) && $course['title'] !== '' ? $course['title'] : 'Curso sem título';
            $instructor = $course['instructor'] ?? 'Instrutor não informado';
            $desc = $course['short_description'] ?? '';
        ?>
        <div class="card">
            <div class="card-img">
                <img src="<?= htmlspecialchars($img) ?>" alt="<?= htmlspecialchars($title) ?>">
            </div>
            <div class="card-body">
                <h3>
                    <a href="curso-detalhe.php?id=<?= urlencode($course['id']) ?>">
                        <?= htmlspecialchars($title) ?>
                    </a>
                </h3>
                <p><strong>Instrutor:</strong> <?= htmlspecialchars($instructor) ?></p>
                <p><?= htmlspecialchars($desc) ?></p>
            </div>
        </div>
        <?php endforeach; ?>
    <?php endif; ?>
</div>

<?php include_once __DIR__ . '/../partials/page-bottom.php'; ?>
