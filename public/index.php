<?php
require_once __DIR__ . '/../includes/courses-functions.php';
include_once __DIR__ . '/../partials/page-top.php';

$courses = getAllCourses();
$featured = array_slice($courses, 0, 3);
?>

<section style="text-align:center; margin-bottom:2rem;">
    <h2>Bem-vindo à Plataforma de Cursos</h2>
    <p>Aprenda novas habilidades em <strong>Programação</strong>, <strong>Design</strong> e <strong>Negócios</strong>.</p>
    <p>Escolha uma área no menu acima e explore nossos cursos.</p>
</section>

<section>
    <h3 style="margin-bottom:1rem;">Cursos em Destaque</h3>
    <div class="card-grid">
        <?php if (empty($featured)): ?>
            <p>Nenhum curso em destaque.</p>
        <?php else: ?>
            <?php foreach ($featured as $course):
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
</section>

<?php include_once __DIR__ . '/../partials/page-bottom.php'; ?>
