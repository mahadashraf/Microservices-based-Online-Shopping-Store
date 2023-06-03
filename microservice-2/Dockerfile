FROM python:3.9

# Copy the Python code into the container
COPY . /app

# Install Flask and Flask-Cors
RUN pip install flask flask-cors

WORKDIR /app

CMD ["python", "app.py"]
