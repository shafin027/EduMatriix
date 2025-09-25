CREATE DATABASE IF NOT EXISTS edumatrix;
USE edumatrix;

CREATE TABLE IF NOT EXISTS users (
    id INT AUTO_INCREMENT PRIMARY KEY,
    username VARCHAR(50) NOT NULL UNIQUE,
    password VARCHAR(255) NOT NULL,
    email VARCHAR(100) NOT NULL,
    name VARCHAR(100) DEFAULT NULL,
    phone VARCHAR(20) DEFAULT NULL,
    address TEXT DEFAULT NULL,
    profile_picture VARCHAR(255) DEFAULT NULL,
    role ENUM('user', 'admin') DEFAULT 'user',
    created_at TIMESTAMP DEFAULT CURRENT_TIMESTAMP
);

CREATE TABLE IF NOT EXISTS programs (
    id INT AUTO_INCREMENT PRIMARY KEY,
    class VARCHAR(20) NOT NULL,
    category VARCHAR(50) NOT NULL,
    price DECIMAL(10, 2) NOT NULL,
    discount_price DECIMAL(10, 2) DEFAULT NULL,
    image VARCHAR(255) DEFAULT NULL,
    description TEXT DEFAULT NULL,
    created_at TIMESTAMP DEFAULT CURRENT_TIMESTAMP
);

CREATE TABLE IF NOT EXISTS enrollments (
    id INT AUTO_INCREMENT PRIMARY KEY,
    user_id INT NOT NULL,
    program_id INT NOT NULL,
    enrollment_date TIMESTAMP DEFAULT CURRENT_TIMESTAMP,
    status ENUM('enrolled', 'finished') DEFAULT 'enrolled',
    FOREIGN KEY (user_id) REFERENCES users(id),
    FOREIGN KEY (program_id) REFERENCES programs(id)
);
CREATE TABLE categories (
    id INT AUTO_INCREMENT PRIMARY KEY,
    category VARCHAR(255) NOT NULL,
    image VARCHAR(255)
);
ALTER TABLE programs ADD COLUMN category_id INT;
ALTER TABLE programs ADD FOREIGN KEY (category_id) REFERENCES categories(id);
ALTER TABLE programs MODIFY class VARCHAR(50);

CREATE TABLE coupons (
    code VARCHAR(50) PRIMARY KEY,
    discount_percent DECIMAL(5, 2) NOT NULL,
    expiry_date DATE NOT NULL,
    created_at TIMESTAMP DEFAULT CURRENT_TIMESTAMP
);
CREATE TABLE IF NOT EXISTS coupons (
    code VARCHAR(50) PRIMARY KEY,
    discount_percent DECIMAL(5, 2) NOT NULL,
    expiry_date DATE NOT NULL,
    created_at TIMESTAMP DEFAULT CURRENT_TIMESTAMP
);

-- Clean up image paths (remove '../Uploads/' prefix if present)
UPDATE programs
SET image = REPLACE(image, '../Uploads/', 'Uploads/')
WHERE image LIKE '../Uploads/%';
-- Insert users with plain text passwords
INSERT INTO users (username, password, email, role) VALUES
('admin', 'admin123', 'admin@edumatrix.com', 'admin'),
('user1', 'user123', 'user1@edumatrix.com', 'user');

INSERT INTO categories (category, image) VALUES
('School Program - SSC 30', 'https://images.unsplash.com/photo-1503676260728-1c00da094a0b?w=400&h=300&fit=crop'),
('School Program - SSC 29', 'https://images.unsplash.com/photo-1503676260728-1c00da094a0b?w=400&h=300&fit=crop'),
('School Program - SSC 28', 'https://images.unsplash.com/photo-1503676260728-1c00da094a0b?w=400&h=300&fit=crop'),
('Academic Program', 'https://images.unsplash.com/photo-1532012197267-da84d127e765?w=400&h=300&fit=crop'),
('Engineering', 'https://images.unsplash.com/photo-1581091226825-a6a2a5aee158?w=400&h=300&fit=crop'),
('Medical', 'https://images.unsplash.com/photo-1559757148-5c350d0d3c56?w=400&h=300&fit=crop'),
('Science', 'https://images.unsplash.com/photo-1532094349884-543bc11b234d?w=400&h=300&fit=crop'),
('Business', 'https://images.unsplash.com/photo-1507003211169-0a1dd7228f2d?w=400&h=300&fit=crop'),
('Humanities', 'https://images.unsplash.com/photo-1481627834876-b7833e8f5570?w=400&h=300&fit=crop'),
('Public University Admission', 'https://images.unsplash.com/photo-1503676260728-1c00da094a0b?w=400&h=300&fit=crop'),
('Private University Admission', 'https://images.unsplash.com/photo-1503676260728-1c00da094a0b?w=400&h=300&fit=crop');

INSERT INTO programs (class, category, price, discount_price, image, description) VALUES
('Class 6', 'School Program - SSC 30', 18000, 15000, 'https://images.unsplash.com/photo-1503676260728-1c00da094a0b?w=400&h=300&fit=crop', 'A comprehensive program for Class 6 students preparing for SSC.'),
('Class 7', 'School Program - SSC 29', 18000, 14000, 'https://images.unsplash.com/photo-1503676260728-1c00da094a0b?w=400&h=300&fit=crop', 'An advanced curriculum for Class 7 students aiming for SSC success.'),
('Class 8', 'School Program - SSC 28', 18000, 13000, 'https://images.unsplash.com/photo-1503676260728-1c00da094a0b?w=400&h=300&fit=crop', 'Tailored courses for Class 8 students to excel in SSC exams.'),
('SSC 27 Science', 'Academic Program', 18000, 12000, 'https://images.unsplash.com/photo-1532094349884-543bc11b234d?w=400&h=300&fit=crop', 'In-depth science courses for SSC 27 students.'),
('SSC 27 Humanities', 'Academic Program', 18000, 11000, 'https://images.unsplash.com/photo-1481627834876-b7833e8f5570?w=400&h=300&fit=crop', 'Humanities-focused program for SSC 27 learners.'),
('SSC 27 Business Studies', 'Academic Program', 18000, 10000, 'https://images.unsplash.com/photo-1507003211169-0a1dd7228f2d?w=400&h=300&fit=crop', 'Business studies curriculum for SSC 27 students.');

-- Add sample programs for new categories
INSERT INTO programs (class, category, price, discount_price, image, description) VALUES
('BUET Admission', 'Engineering', 25000, 20000, 'https://images.unsplash.com/photo-1581091226825-a6a2a5aee158?w=400&h=300&fit=crop', 'Complete engineering admission preparation for BUET.'),
('CUET Admission', 'Engineering', 25000, 20000, 'https://images.unsplash.com/photo-1581091226825-a6a2a5aee158?w=400&h=300&fit=crop', 'Complete engineering admission preparation for CUET.'),
('KUET Admission', 'Engineering', 25000, 20000, 'https://images.unsplash.com/photo-1581091226825-a6a2a5aee158?w=400&h=300&fit=crop', 'Complete engineering admission preparation for KUET.'),
('SUST Admission', 'Engineering', 25000, 20000, 'https://images.unsplash.com/photo-1581091226825-a6a2a5aee158?w=400&h=300&fit=crop', 'Complete engineering admission preparation for SUST.'),
('HSTU Admission', 'Engineering', 25000, 20000, 'https://images.unsplash.com/photo-1581091226825-a6a2a5aee158?w=400&h=300&fit=crop', 'Complete engineering admission preparation for HSTU.'),
('MBSTU Admission', 'Engineering', 25000, 20000, 'https://images.unsplash.com/photo-1581091226825-a6a2a5aee158?w=400&h=300&fit=crop', 'Complete engineering admission preparation for MBSTU.');

INSERT INTO programs (class, category, price, discount_price, image, description) VALUES
('MBBS Admission', 'Medical', 30000, 25000, 'https://images.unsplash.com/photo-1559757148-5c350d0d3c56?w=400&h=300&fit=crop', 'Complete medical college admission preparation.'),
('BDS Admission', 'Medical', 28000, 23000, 'https://images.unsplash.com/photo-1559757148-5c350d0d3c56?w=400&h=300&fit=crop', 'Complete dental college admission preparation.'),
('Pharmacy Admission', 'Medical', 22000, 18000, 'https://images.unsplash.com/photo-1559757148-5c350d0d3c56?w=400&h=300&fit=crop', 'Complete pharmacy college admission preparation.');

INSERT INTO programs (class, category, price, discount_price, image, description) VALUES
('DU Admission', 'Public University Admission', 20000, 15000, 'images/du_logo.png', 'Complete admission preparation for University of Dhaka.'),
('CU Admission', 'Public University Admission', 20000, 15000, 'images/cu_logo.png', 'Complete admission preparation for University of Chittagong.'),
('BRACU Admission', 'Private University Admission', 25000, 20000, 'images/bracu_logo.png', 'Complete admission preparation for BRAC University.'),
('NSU Admission', 'Private University Admission', 25000, 20000, 'images/nsu_logo.png', 'Complete admission preparation for North South University.'),
('EWU Admission', 'Private University Admission', 25000, 20000, 'images/ewu_logo.png', 'Complete admission preparation for East West University.'),
('IUB Admission', 'Private University Admission', 25000, 20000, 'images/iub_logo.png', 'Complete admission preparation for Independent University Bangladesh.');

INSERT INTO programs (class, category, price, discount_price, image, description) VALUES
('Physics Hons', 'Science', 20000, 16000, 'https://images.unsplash.com/photo-1532094349884-543bc11b234d?w=400&h=300&fit=crop', 'Advanced physics for university admission.'),
('Chemistry Hons', 'Science', 20000, 16000, 'https://images.unsplash.com/photo-1532094349884-543bc11b234d?w=400&h=300&fit=crop', 'Advanced chemistry for university admission.'),
('Biology Hons', 'Science', 20000, 16000, 'https://images.unsplash.com/photo-1532094349884-543bc11b234d?w=400&h=300&fit=crop', 'Advanced biology for university admission.');

INSERT INTO programs (class, category, price, discount_price, image, description) VALUES
('BBA Accounting', 'Business', 18000, 14000, 'https://images.unsplash.com/photo-1507003211169-0a1dd7228f2d?w=400&h=300&fit=crop', 'Business administration with accounting focus.'),
('BBA Marketing', 'Business', 18000, 14000, 'https://images.unsplash.com/photo-1507003211169-0a1dd7228f2d?w=400&h=300&fit=crop', 'Business administration with marketing focus.'),
('BBA Finance', 'Business', 18000, 14000, 'https://images.unsplash.com/photo-1507003211169-0a1dd7228f2d?w=400&h=300&fit=crop', 'Business administration with finance focus.');

INSERT INTO programs (class, category, price, discount_price, image, description) VALUES
('Bengali Literature', 'Humanities', 15000, 12000, 'https://images.unsplash.com/photo-1481627834876-b7833e8f5570?w=400&h=300&fit=crop', 'Advanced Bengali literature studies.'),
('English Literature', 'Humanities', 15000, 12000, 'https://images.unsplash.com/photo-1481627834876-b7833e8f5570?w=400&h=300&fit=crop', 'Advanced English literature studies.'),
('History Hons', 'Humanities', 15000, 12000, 'https://images.unsplash.com/photo-1481627834876-b7833e8f5570?w=400&h=300&fit=crop', 'Advanced history studies.');

INSERT INTO programs (class, category, price, discount_price, image, description) VALUES
('DU Admission', 'Public University Admission', 20000, 18000, 'https://images.unsplash.com/photo-1503676260728-1c00da094a0b?w=400&h=300&fit=crop', 'Complete admission preparation for Dhaka University.'),
('BUET Admission', 'Public University Admission', 25000, 22000, 'https://images.unsplash.com/photo-1581091226825-a6a2a5aee158?w=400&h=300&fit=crop', 'Complete admission preparation for BUET.'),
('CUET Admission', 'Public University Admission', 25000, 22000, 'https://images.unsplash.com/photo-1581091226825-a6a2a5aee158?w=400&h=300&fit=crop', 'Complete admission preparation for CUET.'),
('BRACU Admission', 'Private University Admission', 18000, 16000, 'https://images.unsplash.com/photo-1507003211169-0a1dd7228f2d?w=400&h=300&fit=crop', 'Complete admission preparation for BRAC University.'),
('NSU Admission', 'Private University Admission', 18000, 16000, 'https://images.unsplash.com/photo-1507003211169-0a1dd7228f2d?w=400&h=300&fit=crop', 'Complete admission preparation for North South University.'),
('EWU Admission', 'Private University Admission', 18000, 16000, 'https://images.unsplash.com/photo-1507003211169-0a1dd7228f2d?w=400&h=300&fit=crop', 'Complete admission preparation for East West University.'),
('IUB Admission', 'Private University Admission', 18000, 16000, 'https://images.unsplash.com/photo-1507003211169-0a1dd7228f2d?w=400&h=300&fit=crop', 'Complete admission preparation for Independent University Bangladesh.');

UPDATE programs SET category_id = (SELECT id FROM categories WHERE categories.category = programs.category);

INSERT INTO coupons (code, discount_percent, expiry_date) VALUES
('EDUMATRIX100', 100.00, '2025-12-31');

CREATE TABLE IF NOT EXISTS reviews (
    id INT AUTO_INCREMENT PRIMARY KEY,
    user_id INT NOT NULL,
    program_id INT NOT NULL,
    rating INT NOT NULL CHECK (rating >= 1 AND rating <= 5),
    review_text TEXT,
    created_at TIMESTAMP DEFAULT CURRENT_TIMESTAMP,
    FOREIGN KEY (user_id) REFERENCES users(id),
    FOREIGN KEY (program_id) REFERENCES programs(id)
);
