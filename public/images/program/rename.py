import os

folder_path = '/opt/lampp/htdocs/luli/public/images/program/'  # Replace with the actual folder path

files = os.listdir(folder_path)
img_files = [file for file in files if file.startswith('IMG')]

for index, file_name in enumerate(img_files):
    file_extension = os.path.splitext(file_name)[1]  # Get the file extension
    new_file_name = f'image_{index+1}{file_extension}'  # Rename the file
    
    original_file_path = os.path.join(folder_path, file_name)
    new_file_path = os.path.join(folder_path, new_file_name)
    
    os.rename(original_file_path, new_file_path)
