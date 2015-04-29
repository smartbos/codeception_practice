#Codeception을 이용한 인수테스트 기초#
BDD 스타일 테스트 프레임워크인 [Codeception](http://codeception.com/)의 사용법을 실습을 통해 알아봅니다.

발표자료는 [http://slides.com/hyun-seoklee/codeception-1/](http://slides.com/hyun-seoklee/codeception-1/) 를 참고하세요.

##본 샘플코드의 테스트를 수행하기 위해서는##
 * 샘플코드의 Acceptance 테스트 설정이 WebDriver로 설정되어 있어 테스트를 실행하기 위해서는 Selenium 의 실행이 필요합니다. 테스트를 실행하기 전에 아래의 커맨드를 입력해주세요.
```
java -jar selenium-server-standalone-2.45.0.jar
```

 * tests/acceptance.suite.yml 파일에 있는 WebDriver url 설정 값을 각자의 로컬 테스트 환경에 맞게 수정해주세요.

 * 또한, sample.sql 파일을 이용하여 데이터베이스를 생성해주시고, setup.php 파일에 데이터베이스 관련 설정을 수정해주셔야 테스트 실행이 가능합니다.