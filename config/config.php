<?php
/**
 * Configurações Globais do Sistema
 * Sistema Inteligente de Sugestão, Gestão e Geração de Temas e Trabalhos Académicos
 */

// ============================================
// INFORMAÇÕES DA APLICAÇÃO
// ============================================
define('APP_NAME', 'Sistema Académico Inteligente');
define('APP_VERSION', '1.0.0');
define('APP_DESCRIPTION', 'Sistema Inteligente de Sugestão, Gestão e Geração de Temas e Trabalhos Académicos');
define('APP_AUTHOR', 'Ildimauro');
define('APP_URL', 'http://localhost/HildoDomingos');
define('APP_TIMEZONE', 'Africa/Luanda');

// ============================================
// BANCO DE DADOS
// ============================================
define('DB_HOST', 'localhost');
define('DB_PORT', 3306);
define('DB_NAME', 'sistema_academico');
define('DB_USER', 'root');
define('DB_PASSWORD', '');
define('DB_CHARSET', 'utf8mb4');

// ============================================
// SEGURANÇA
// ============================================
define('CSRF_TOKEN_LENGTH', 32);
define('SESSION_TIMEOUT', 3600); // 1 hora em segundos
define('PASSWORD_MIN_LENGTH', 8);
define('PASSWORD_HASH_ALGO', 'bcrypt');
define('PASSWORD_HASH_COST', 12);
define('MAX_LOGIN_ATTEMPTS', 5);
define('LOGIN_ATTEMPT_TIMEOUT', 900); // 15 minutos
define('ALLOW_REMEMBER_ME', true);
define('REMEMBER_ME_DAYS', 30);

// ============================================
// PREÇOS E TAXAS (em Kwanza)
// ============================================
define('CURRENCY', 'KZ');
define('CURRENCY_SYMBOL', 'Kz');

// Temas
define('PRICE_THEME_ADDITIONAL', 500);        // Tema adicional após 2 gratuitos
define('FREE_THEMES_PER_STUDENT', 2);          // Quantidade de temas gratuitos

// Instituições
define('PRICE_INSTITUTION_REGISTRATION', 5000); // Taxa única de registo
define('INSTITUTION_DEFAULT', 1);               // ID da instituição padrão
define('INSTITUTION_DEFAULT_NAME', 'Instituto Superior Politécnico do Soyo');

// Trabalhos Académicos
define('PRICE_WORK_INDIVIDUAL', 2500);         // Trabalho individual
define('PRICE_WORK_GROUP', 4000);              // Trabalho em grupo (60% mais caro)
define('WORK_GROUP_PERCENTAGE', 60);           // Percentagem de aumento para grupo

// Métodos de pagamento
define('PAYMENT_METHODS', [
    'express' => 'Express',
    'unitel_money' => 'Unitel Money',
    'kwik' => 'Kwik',
    'iban' => 'IBAN',
    'paypa_ao' => 'PayPa AO'
]);

// ============================================
// LIMITES E RESTRIÇÕES
// ============================================
define('MAX_FILE_SIZE', 52428800);              // 50 MB em bytes
define('ALLOWED_FILE_TYPES', ['pdf', 'doc', 'docx', 'xls', 'xlsx', 'ppt', 'pptx', 'jpg', 'jpeg', 'png', 'gif']);
define('PROFILE_IMAGE_MAX_SIZE', 5242880);     // 5 MB
define('LOGO_IMAGE_MAX_SIZE', 2097152);        // 2 MB
define('PAGINATION_LIMIT', 15);                // Registos por página
define('DASHBOARD_RECENT_LIMIT', 10);          // Registos recentes no dashboard

// ============================================
// CAMINHOS DO SISTEMA
// ============================================
define('BASE_PATH', __DIR__ . '/..');
define('APP_PATH', BASE_PATH . '/app');
define('CONFIG_PATH', BASE_PATH . '/config');
define('PUBLIC_PATH', BASE_PATH . '/public');
define('ASSETS_PATH', PUBLIC_PATH . '/assets');
define('UPLOADS_PATH', PUBLIC_PATH . '/assets/uploads');
define('STORAGE_PATH', BASE_PATH . '/storage');
define('LOGS_PATH', STORAGE_PATH . '/logs');
define('DOCUMENTS_PATH', STORAGE_PATH . '/documents');
define('BACKUPS_PATH', STORAGE_PATH . '/backups');

// ============================================
// EMAIL E NOTIFICAÇÕES
// ============================================
define('MAIL_HOST', 'smtp.gmail.com');
define('MAIL_PORT', 587);
define('MAIL_USERNAME', 'seu-email@gmail.com');
define('MAIL_PASSWORD', 'sua-senha-app');
define('MAIL_FROM_ADDRESS', 'noreply@sistemaaacademico.com');
define('MAIL_FROM_NAME', APP_NAME);
define('MAIL_ENCRYPTION', 'tls');
define('MAIL_DEBUG', false);

// ============================================
// NÍVEIS DE ENSINO EM ANGOLA
// ============================================
define('EDUCATION_LEVELS', [
    1 => 'Ensino Básico (1º ao 3º ciclo)',
    2 => 'Ensino Secundário (10º-12º ano)',
    3 => 'Ensino Médio Técnico',
    4 => 'Instituto Médio',
    5 => 'Ensino Superior - Licenciatura',
    6 => 'Ensino Superior - Mestrado',
    7 => 'Ensino Superior - Doutorado',
    8 => 'Cursos Profissionais',
    9 => 'Formação Especializada',
    10 => 'Outro'
]);

// ============================================
// ESTADOS DO SISTEMA
// ============================================

// Estados de temas
define('THEME_STATUS', [
    'draft' => 'Rascunho',
    'pending' => 'Pendente',
    'approved' => 'Aprovado',
    'active' => 'Ativo',
    'completed' => 'Concluído',
    'rejected' => 'Rejeitado'
]);

// Estados de pedidos de tutoria
define('TUTOR_REQUEST_STATUS', [
    'pending' => 'Pendente',
    'approved' => 'Aprovado',
    'rejected' => 'Rejeitado',
    'completed' => 'Concluído',
    'cancelled' => 'Cancelado'
]);

// Estados de trabalhos
define('WORK_STATUS', [
    'draft' => 'Rascunho',
    'submitted' => 'Submetido',
    'reviewing' => 'Em revisão',
    'completed' => 'Completo',
    'published' => 'Publicado',
    'rejected' => 'Rejeitado'
]);

// Estados de pagamentos
define('PAYMENT_STATUS', [
    'pending' => 'Pendente',
    'completed' => 'Completado',
    'failed' => 'Falhou',
    'refunded' => 'Reembolsado',
    'cancelled' => 'Cancelado'
]);

// Estados de instituições
define('INSTITUTION_STATUS', [
    'pending' => 'Pendente de aprovação',
    'active' => 'Ativa',
    'inactive' => 'Inativa',
    'suspended' => 'Suspensa',
    'rejected' => 'Rejeitada'
]);

// ============================================
// PERFIS E PERMISSÕES
// ============================================
define('USER_ROLES', [
    'student' => 'Estudante',
    'tutor' => 'Tutor',
    'admin' => 'Administrador',
    'superadmin' => 'Super Administrador'
]);

define('STUDENT_PERMISSIONS', [
    'view_dashboard',
    'create_theme',
    'view_themes',
    'request_tutor',
    'view_tutors',
    'create_work',
    'view_works',
    'make_payment',
    'view_payment_history',
    'export_pdf',
    'view_favorites',
    'view_history'
]);

define('TUTOR_PERMISSIONS', [
    'view_dashboard',
    'view_students',
    'approve_reject_requests',
    'view_student_themes',
    'view_student_works',
    'create_report',
    'view_reports'
]);

define('ADMIN_PERMISSIONS', [
    'view_dashboard',
    'manage_users',
    'manage_institutions',
    'manage_courses',
    'manage_education_levels',
    'manage_themes',
    'manage_works',
    'manage_payments',
    'approve_institutions',
    'view_reports'
]);

define('SUPERADMIN_PERMISSIONS', [
    'manage_everything',
    'manage_users',
    'manage_institutions',
    'manage_permissions',
    'configure_system',
    'view_logs',
    'manage_backups',
    'manage_payments',
    'view_reports',
    'manage_pricing'
]);

// ============================================
// CONFIGURAÇÕES DE LOG
// ============================================
define('LOG_ENABLED', true);
define('LOG_LEVEL', 'info'); // debug, info, warning, error
define('LOG_FILE_ROTATION', true);
define('LOG_MAX_FILE_SIZE', 10485760); // 10 MB
define('LOG_ARCHIVE_DAYS', 30);

define('LOG_EVENTS', [
    'user_login' => true,
    'user_logout' => true,
    'user_register' => true,
    'theme_creation' => true,
    'theme_deletion' => true,
    'payment_made' => true,
    'institution_registered' => true,
    'institution_approved' => true,
    'work_created' => true,
    'tutor_request' => true
]);

// ============================================
// AMBIENTE
// ============================================
define('ENVIRONMENT', 'development'); // development, production
define('DEBUG_MODE', true);
define('SHOW_ERRORS', ENVIRONMENT === 'development');

if (ENVIRONMENT === 'production') {
    error_reporting(E_ALL & ~E_NOTICE & ~E_DEPRECATED & ~E_STRICT);
    ini_set('display_errors', 0);
    ini_set('log_errors', 1);
} else {
    error_reporting(E_ALL);
    ini_set('display_errors', 1);
}

// ============================================
// PAGINAÇÃO
// ============================================
define('ITEMS_PER_PAGE', 15);
define('PAGINATION_LINKS', 5);

// ============================================
// CACHE (não implementado ainda)
// ============================================
define('CACHE_ENABLED', false);
define('CACHE_TTL', 3600); // 1 hora

// ============================================
// VERIFICAÇÃO DE DEPENDÊNCIAS
// ============================================

// Verificar extensões PHP necessárias
$required_extensions = ['pdo', 'pdo_mysql', 'json', 'mbstring', 'curl'];
foreach ($required_extensions as $ext) {
    if (!extension_loaded($ext)) {
        die("Extensão PHP necessária não encontrada: $ext");
    }
}

// Verificar diretórios de escrita
$writable_dirs = [UPLOADS_PATH, LOGS_PATH, DOCUMENTS_PATH, BACKUPS_PATH];
foreach ($writable_dirs as $dir) {
    if (!is_dir($dir)) {
        mkdir($dir, 0755, true);
    }
    if (!is_writable($dir)) {
        error_log("Diretório não tem permissão de escrita: $dir");
    }
}

?>