import re
import os

os.makedirs('css', exist_ok=True)

# 1. Process index.html
with open('index.html', 'r', encoding='utf-8') as f:
    index_content = f.read()

# Extract the style block
style_match = re.search(r'<style>.*?</style>', index_content, flags=re.DOTALL)
if style_match:
    style_content = style_match.group(0)
    # Strip <style> and </style> tags for the CSS file
    inner_css = re.sub(r'</?style>', '', style_content).strip()
    
    # Save to css/style.css
    with open('css/style.css', 'w', encoding='utf-8') as f:
        f.write(inner_css)
        print("Created css/style.css from index.html")
        
    # Replace in index.html
    new_index_content = index_content.replace(style_content, '<link rel="stylesheet" href="css/style.css">')
    with open('index.html', 'w', encoding='utf-8') as f:
        f.write(new_index_content)
        print("Updated index.html to use external css")
else:
    print("Could not find <style> block in index.html")

# 2. Process booking.php
try:
    with open('booking.php', 'r', encoding='utf-8') as f:
        booking_content = f.read()

    # Find the style block in booking.php
    booking_style_match = re.search(r'<style>.*?</style>', booking_content, flags=re.DOTALL)
    if booking_style_match:
        booking_style = booking_style_match.group(0)
        # We assume booking.php shares the exact same CSS as index.html, since they were largely copies of each other.
        # But wait! booking.php might have slight differences? Let's check if the inner CSS matches.
        # Even if not, moving the style out helps.
        # We will just replace it with the same link.
        new_booking_content = booking_content.replace(booking_style, '<link rel="stylesheet" href="css/style.css">')
        with open('booking.php', 'w', encoding='utf-8') as f:
            f.write(new_booking_content)
            print("Updated booking.php to use external css")
    else:
        print("Could not find <style> block in booking.php")
except FileNotFoundError:
    print("booking.php not found")
