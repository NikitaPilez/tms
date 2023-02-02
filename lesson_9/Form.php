<?php

namespace lesson_9;

class Form
{
    public function input(string $type, string $name, ?string $placeholder = "", ?array $classes = []): string
    {
        $placeholderInput = $placeholder ? " placeholder=\"" . $placeholder . "\"" : "";
        $classesInput = $classes ? implode(" ", $classes) : "";
        return "<input type=\"" . $type . "\" name=\"" . $name . "\" class=\"" . $classesInput . "\" $placeholderInput>";
    }

    public function submit(string $text, ?array $classes = []): string
    {
        $classesInput = $classes ? implode(" ", $classes) : "";
        return "<button type=\"submit\" class=\"" . $classesInput . "\" >" . $text . "</button>";
    }

    public function label(string $text, ?array $classes = []): string
    {
        $classesInput = $classes ? implode(" ", $classes) : "";
        return "<label class=\"" . $classesInput . "\" >" . $text . "</label>";
    }

    public function formClose(): string
    {
        return "</form>";
    }

    public function formOpen(string $action, string $method): string
    {
        return "<form action=\"" . $action . "\" method=\"" . $method . "\">";
    }
}
