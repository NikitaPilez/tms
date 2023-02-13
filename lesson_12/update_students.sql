UPDATE students SET description = "Test", has_experience = 1 WHERE id = 1;
UPDATE students SET description = IF(has_experience = 1, "Has experience", "No experience");

UPDATE students SET description = CASE
    WHEN is_male = 1 THEN "Male"
    WHEN is_male = 0 THEN "Female"
    WHEN is_male IS NULL THEN "Not unknown"
END;
