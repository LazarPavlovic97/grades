<?php
    final class Configuration {
        const BASE = 'http://collaboration.local/';

        const DATABASE_HOST = 'localhost';
        const DATABASE_USER = 'root';
        const DATABASE_PASS = 'abc123';
        const DATABASE_NAME = 'collaboration';

        const SESSION_STORAGE_CLASS = '\\App\\Core\\Session\\FileSessionStorage';
        const SESSION_STORAGE_ARGUMENTS = [ './session/' ]; # !!!

        const FINGERPRINT_PROVIDER_CLASS = '\\App\\Core\\Fingerprint\\BasicFingerprintProvider';

        const UPLOAD_DIR = 'assets/uploads/';

        const MAIL_HOST = 'smtp.gmail.com';
        const MAIL_PORT = '587';
        const MAIL_PROTOCOL = 'tls';
        const MAIL_USERNAME = 'server.collaboration@gmail.com';
        const MAIL_PASSWORD = 'collaboration';
    }
