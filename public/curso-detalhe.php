<?php
require_once __DIR__ . '/../includes/courses-functions.php';
include_once __DIR__ . '/../partials/page-top.php';

$courseId = $_GET['id'] ?? '';
$course = $courseId !== '' ? getCourseById($courseId) : null;
?>

<?php if (!$course): ?>
    <h2>Curso não encontrado</h2>
    <p>Verifique o link ou volte ao <a href="cursos.php">catálogo</a>.</p>
<?php else: ?>
    <a href="index.php" class="btn-voltar">← Voltar à Página Inicial</a>

    <article>
        <h1><?= htmlspecialchars($course['title'] ?? 'Curso sem título') ?></h1>
        <h4>Instrutor: <?= htmlspecialchars($course['instructor'] ?? 'Instrutor não informado') ?></h4>

      
        <div class="card-img" style="max-width:400px; margin:1rem auto;">
            <img 
                src="<?= isset($course['img']) && $course['img'] !== '' ? htmlspecialchars($course['img']) : '/img/courses/default.jpg' ?>" 
                alt="<?= htmlspecialchars($course['title'] ?? 'Curso sem título') ?>" 
                style="width:100%; height:430x; object-fit:cover; border-radius:8px;">
        </div>

        <p><?= htmlspecialchars($course['short_description'] ?? '') ?></p>

        <hr style="margin: 2rem 0;">

        <h3>Módulos do Curso:</h3>
        <?php if (!empty($course['modules']) && is_array($course['modules'])): ?>
            <ul>
                <?php foreach ($course['modules'] as $module): ?>
                    <li><?= htmlspecialchars($module) ?></li>
                <?php endforeach; ?>
            </ul>
        <?php else: ?>
            <p>Este curso ainda não possui módulos cadastrados.</p>
        <?php endif; ?>
    </article>
<?php endif; ?>

<?php include_once __DIR__ . '/../partials/page-bottom.php'; ?>
