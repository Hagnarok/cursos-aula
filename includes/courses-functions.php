<?php
declare(strict_types=1);

function getAllCourses(): array {
    $path = __DIR__ . '/../assets/courses.json';
    if (!file_exists($path)) return [];
    $json = file_get_contents($path);
    $courses = json_decode($json, true);
    return is_array($courses) ? $courses : [];
}

function getCoursesByArea(string $area): array {
    $allCourses = getAllCourses();
    $filtered = [];
    foreach ($allCourses as $course) {
        if (strtolower($course['area']) === strtolower($area)) {
            $filtered[] = $course;
        }
    }
    return $filtered;
}

function getCourseById(string $id): ?array {
    $allCourses = getAllCourses();
    foreach ($allCourses as $course) {
        if ($course['id'] === $id) {
            return $course;
        }
    }
    return null;
}
