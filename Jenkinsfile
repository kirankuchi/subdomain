pipeline {
  agent any
  stages {
    stage('verify version')
    steps {
      sh 'php --version'
    }
  }
  stage('subdomain')
  steps {
    sh 'php cpanel.php'
  }
}

}
}
