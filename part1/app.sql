-- Create student table
CREATE TABLE student (
    id SERIAL PRIMARY KEY,
    fullName TEXT NOT NULL,
    email TEXT NOT NULL
);

-- Create university table
CREATE TABLE university (
    id SERIAL PRIMARY KEY,
    uniName TEXT NOT NULL,
    uniLocation TEXT
);

-- Create linking table
CREATE TABLE StudentUniversityLink (
    id SERIAL PRIMARY KEY,
    student_id INT NOT NULL,
    university_id INT NOT NULL,
    FOREIGN KEY (student_id) REFERENCES student(id),
    FOREIGN KEY (university_id) REFERENCES university(id)
);
