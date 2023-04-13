pipeline {
  agent any
  stages {
    stage('verify version') {
      steps {
        bat 'php --version'
      }
    }
    stage('hello') {
      steps {
        sh 'php cpanel.php'
      }
    }
  }
}
